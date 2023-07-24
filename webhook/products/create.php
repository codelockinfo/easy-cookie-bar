<?php 
include_once 'append/connection.php';
include_once '../append/unencode.php';
require_once(ABS_PATH . '/cls_shopifyapps/config.php');

$my_hmac = $_SERVER['http-X-Shopify-Hmac-Sha256'];
$data=  file_get_contents('php:/input');
$utf8 = json_encode($data);
$data_json=  json_decode($utf8,true);
$verify_request = verify_request($data,$my_hmac);
if($verify_request){
    $responce =$data_json;
    
}else{
    $responce = 'this is not from shopify . ';
}
$shopify_domain= $_SERVER['http-X-Shopify-Shop-Domain'];
$log= fopen($shopify_domain."json", "w")or die("can't open a file or create file.");
fwrite($log, $responce);
fclose($log);

function verify_request($data,$hmac){
    $verify_hmac= base64_encode(hash_hmac('sha256',data,SHOPIFY_SECRET ,true));
    return hash_equals($hmac,$verify_hmac);

}

?>