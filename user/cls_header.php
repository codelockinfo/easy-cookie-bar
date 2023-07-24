<?php
include_once '../append/connection.php';
include_once ABS_PATH . '/user/cls_functions.php';
include_once ABS_PATH . '/cls_shopifyapps/config.php';

$default_shop = 'managedashboard.myshopify.com';

if ((isset($_GET['store']) && $_GET['store'] != '') || isset($default_shop)) {
   $store = isset($_GET['store']) ? $_GET['store'] : $default_shop;
    $functions = new Client_functions($store);
    $ologin = new Login();
    $current_user = $functions->get_store_detail_obj();
    $login_user = $functions->get_login_user_data();
    
    // if (!empty($login_user)) {
    //     $current_user = array_merge((array) $current_user, $login_user);
    // } else {
    //     header('Location: ' . SITE_CLIENT_URL . '?store=' . $store);
    //     exit;
    // }

    if (empty($current_user)) {
        // header('Location: https://www.shopify.com/admin/apps');
        // exit;
    }
} else {
    header('Location: https://www.shopify.com/admin/apps');
    exit;
}
$view = (isset($_GET["view"]) && $_GET["view"]) ? $_GET["view"] : FALSE;
?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo CLS_SITE_NAME; ?></title>
        <link rel="stylesheet" href="<?php echo main_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo main_url('assets/css/shopify_clients.css'); ?>" />
        <link rel="stylesheet" href="<?php echo main_url('assets/css/shopify_client.css'); ?>" />
        <link rel="stylesheet" href="<?php echo main_url('assets/css/polaris.min.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo main_url('assets/css/spectrum.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo main_url('assets/css/owl.carousel.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo main_url('assets/css/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo main_url('assets/css/bootstrap-tagsinput.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo main_url('assets/css/select2.min.css'); ?>" rel="stylesheet"> 
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/editor.css">
         <style>
            @import url('https://fonts.googleapis.com/css2?family=Oi&display=swap&family=Goblin+One&display=swap&family=Dancing+Script&display=swap&family=Dancing+Script&family=Goblin+One&family=Pacifico&display=swap&family=Caveat&display=swap&family=Martel:wght@200&display=swap&family=Satisfy&display=swap&family=Courgette&display=swap&family=Secular+One&display=swap');  
        </style>
        <script> var store = "<?php echo $store; ?>"; </script>
            <?php  $_SESSION['store'] = $store; ?>
        <script src="<?php echo main_url('assets/js/jquery-2.1.1.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/jquery-ui.min.js'); ?>"></script>
        <?php // include_once('../cls_shopifyapps/change_charge.php'); ?>    
        <script src="<?php echo main_url('assets/js/spectrum.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/popper.min.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/star_rating.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo main_url('assets/js/ckeditor/ckeditor.js'); ?>"></script>
	<script src="<?php echo main_url('assets/js/bootstrap-tagsinput.min.js'); ?>"></script>
	<script src="<?php echo main_url('assets/js/select2.full.min.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/shopify_client.js'); ?>"></script>
        <script src="../assets/js/shopify_custom.js"></script> 
        <script src="../assets/js/tinymce.min.js" type="text/javascript" /></script>
    
     <?php  if($view == true){  ?>
        <script src="../assets/js/viewscript.js" type="text/javascript" /></script>
    <?php }else{ ?>
        <script src="../assets/js/script.js" type="text/javascript" /></script>
    <?php 
    } ?>
   