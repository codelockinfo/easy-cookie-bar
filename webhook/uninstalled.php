<?php
include_once '../append/connection.php';
include_once '../append/unencode.php';
include_once '../append/functions.php';
$common_function = new common_function();
if (isset($_GET['inapp']) && $_GET['inapp'] == '1') {
    $fields = array(
        'status' => '0',
        'is_demand_accept' => '0',
    );
    $where_query = array(["", "store_name", "=", $_GET['shop']]);
    $common_function->put_data(TABLE_USER_SHOP, $fields, $where_query);
    $common_function->query("UPDATE " . TABLE_USER_SHOP . " SET application_language=null WHERE store_name = '$shop' ") ;
} else {
    echo "Access Denied";
    exit;
}
?>