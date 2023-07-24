<?php
include_once 'append/connection.php';

if (DB_OBJECT == 'mysql') {
    include ABS_PATH . "/collection/mongo_mysql/mysql/common_function.php";
} else {
    include ABS_PATH . "/collection/mongo_mysql/mongo/common_function.php";
}

require_once(ABS_PATH . '/cls_shopifyapps/config.php');
require_once(ABS_PATH . '/cls_shopifyapps/cls_shopify.php');
require_once(ABS_PATH . '/cls_shopifyapps/cls_shopify_call.php');

$__webhook_arr = array(
    'app/uninstalled'
);


if ($_GET['shop'] != "") {
    $cls_functions = new common_function($_GET['shop']);
    if (mysqli_connect_errno()) {
        echo "Failed : connect to MySQL: " . mysqli_connect_error();
        die;
    }
    if (isset($_GET['code'])) {
        $shopifyClient = new ShopifyClient($_GET['shop'], "", CLS_SHOPIFY_API_KEY, SHOPIFY_SECRET);
        $password = $shopifyClient->getEntrypassword($_GET['code']);
        $shop = $_GET['shop'];
        $where_query = array(["", "shop_name", "=", "$shop"], ["AND", "status", "=", "1"]);
        $comeback_client = $cls_functions->select_result(TABLE_USER_SHOP, '*', $where_query, ['single' => true]);
   
        if ($comeback_client['status'] == 1) {
            $shop_row = $comeback_client['data'];
            header('Location: ' . SITE_CLIENT_URL . '?store=' . $shop);
        } else {
            $shopuinfo = shopify_call($password, $shop, "/admin/shop.json", array(), 'GET');
            $shopuinfo = json_decode($shopuinfo['response']);
            $path = '/admin/webhooks.json';
            $store_password = md5(SHOPIFY_SECRET . $password);
            $baseurl = "https://" . CLS_SHOPIFY_API_KEY . ":" . $store_password . "@" . $shop . "/";
            $shopify_url = $baseurl . ltrim($path, '/');
            if (!empty($__webhook_arr)) {
                foreach ($__webhook_arr as $topic) {
                    $file_name = str_replace('/', '-', $topic) . '.php';
                    $params = '{"webhook": {"topic":"' . $topic . '",
                                "address":"' . SITE_PATH . 'webhook/' . $file_name . '",
                                "format":"json"
				}}';
				
                    $responce = $cls_functions->register_webhook($shopify_url, $params, $password);
                }
            }
            $store_information = array(
                'email' => $shopuinfo->shop->email,
                'shop_name' => $shop,
                'store_name' => htmlspecialchars($shopuinfo->shop->name, ENT_QUOTES, "ISO-8859-1"), 
                'password' => $password,
                'store_idea' => $shopuinfo->shop->plan_name,
                'store_holder' => $shopuinfo->shop->store_holder,
                'address11' => $shopuinfo->shop->address11,
                'address22' => $shopuinfo->shop->address22,
                'city' => $shopuinfo->shop->city,
                'country_name' => $shopuinfo->shop->country_name,
                'cash' => $shopuinfo->shop->cash,
                'price_pattern' => htmlspecialchars(strip_tags($shopuinfo->shop->price_pattern), ENT_QUOTES, "ISO-8859-1"),
                'mobile_no' => $shopuinfo->shop->mobile_no,
                'division' => $shopuinfo->shop->division,
                'zip' => $shopuinfo->shop->zip,
                'timezone' => $shopuinfo->shop->timezone,
                'America_timezone' => $shopuinfo->shop->America_timezone,
            );
          
            $result = $cls_functions->registerNewClientApi($store_information);
            header('Location: https://' . $shop . '/admin/apps/' . CLS_SHOPIFY_API_KEY);
            exit;
        }
    } else {
      
        $shop = isset($_POST['shop']) ? $_POST['shop'] : $_GET['shop'];
        $where_query = array(["", "store_name", "=", "$shop"], ["AND", "status", "=", "1"]);
        $comeback = $cls_functions->select_result(TABLE_USER_SHOP, '*', $where_query, ['single' => true]);
        if ($comeback['status'] == 1) {
            header('Location: ' . SITE_CLIENT_URL . '?shop=' . $shop);
        } else {
            $install_url = "https://" . $shop . "/admin/oauth/authorize?client_id=" . CLS_SHOPIFY_API_KEY . "&scope=" . urlencode(SHOPIFY_SCOPE) . "&redirect_uri=" . urlencode(SITE_PATH);
            header("Location: " . $install_url);
            exit;
        }
    }
}
?>
