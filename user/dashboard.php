<?php
ob_start();
include_once('cls_header.php');
include_once('../append/session.php');
$common_function = new common_function();
if (isset($_GET['store']) && $_GET['store'] != '') {
    include_once('dashboard_header.php');
    $mysql_date = date('Y-m-d H:i:s');
    $key = (isset($_GET['key']) ? $_GET['key'] : '');
    $fields = '*';
    $where_query = array(["", "url_key", "=", "$key"], ["AND", "used", "=", "0"]);
    $options_arr = array('single' => true);
    $comeback = $common_function->select_result(TABLE_CUSTOMIZE, $fields, $where_query, $options_arr);
    if (!empty($comeback["data"]) && isset($comeback["data"]->url_key)) {
        $row['used'] = '1';
        $where_query = array(["", "url_key", "=", "$key"]);
        $common_function->put_data(TABLE_CUSTOMIZE, $row, $where_query, false);
        $_SESSION["url_key"] = $key;
    } else if (!isset($_SESSION["url_key"])) {
        header('Location:index.php?destroy=true&store=' . $_GET['store']);
        exit;
    }
} else {
    header('Location:https://accounts.shopify.com/store-login');
}
?>
<html>
    <style>
.hover01 p img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover01 p:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}
    </style>
    <body>
        <div class="Polaris-Page">
            <div class="Polaris-Page__Content">
                <div class="Polaris-Layout">
                    <div class="Polaris-Layout__AnnotatedSection">
                        <div class="Polaris-Layout__AnnotationWrapper">
                            <div class="Polaris-Layout__AnnotationContent">
                                <div class="Polaris-Card">
                                    <div class="Polaris-Card__Section">
                                        <div class="hover01 column">
                                            <div class="Polaris-Card__Header"></div>
                                            <div class="Polaris-Layout">
                                               
                                                <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                                                    <div class="Polaris-Card">                                            
                                                        <div class="Polaris-Card__Header header-data">
                                                            <h2 class="Polaris-Heading head-title"><a class="Polaris-Link" href="blog_post.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true">Blog Post</a></h2>
                                                            <h2 class="Polaris-Heading-number numberConvertBlog"></h2>
                                                        </div>
                                                        <div class="Polaris-Card__Section">
                                                            <a href="blog_post.php?store=<?php echo $_SESSION['store']; ?>" style="display:block; width:100%; height:100%;">
                                                            <p class="Polaris-DisplayText Polaris-DisplayText--sizeLarge"><img src="<?php echo CLS_SITE_URL; ?>/assets/images/imagesb1.png" style="width:350px;height:100%;margin-left: 15px;"></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                                                    <div class="Polaris-Card">                                            
                                                        <div class="Polaris-Card__Header header-data">
                                                            <h2 class="Polaris-Heading head-title"><a class="Polaris-Link" href="pages.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true">Pages</a></h2>
                                                            <h2 class="Polaris-Heading-number numberConvertPages"></h2>
                                                        </div>
                                                        <div class="Polaris-Card__Section">
                                               <a href="pages.php?store=<?php echo $_SESSION['store']; ?>" style="display:block; width:100%; height:100%;">
                                                            <p class="Polaris-DisplayText Polaris-DisplayText--sizeLarge"><img src="<?php echo CLS_SITE_URL; ?>/assets/images/img.png" style="width:385px;height:100%;"></p>
                                                        </a> 
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>                               
                                            <div class="Polaris-Card__Header"></div>
                                            <div class="Polaris-Layout">
                                                <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                                                    <div class="Polaris-Card">                                            
                                                        <div class="Polaris-Card__Header header-data">
                                                            <h2 class="Polaris-Heading head-title"><a class="Polaris-Link" href="products.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true">Product</a></h2>
                                                            <h2 class="Polaris-Heading-number numberConvertProduct"></h2>
                                                        </div>
                                                        <div class="Polaris-Card__Section">
                                                            <a href="products.php?store=<?php echo $_SESSION['store']; ?>" style="display:block; width:100%; height:100%;">
                                                            <p class="Polaris-DisplayText Polaris-DisplayText--sizeLarge"><img src="<?php echo CLS_SITE_URL; ?>/assets/images/unname1.png" style="width:350px;height:100%;"> </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>                                 
                                                <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                                                    <div class="Polaris-Card">                                            
                                                        <div class="Polaris-Card__Header header-data">
                                                            <h2 class="Polaris-Heading head-title"><a class="Polaris-Link" href="collection.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true">Collection</a></h2>
                                                            <h2 class="Polaris-Heading-number numberConvertCollection"></h2>
                                                        </div>
                                                        <div class="Polaris-Card__Section">
                                                            <a href="collection.php?store=<?php echo $_SESSION['store']; ?>" style="display:block; width:100%; height:100%;">
                                                            <p class="Polaris-DisplayText Polaris-DisplayText--sizeLarge"><img src="<?php echo CLS_SITE_URL; ?>/assets/images/imgc1.png"  style="width:357px;height:100%;margin-left: 33px;"></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </body>
</html> 
<script>
    $(document).ready(function () {


        var routineName = 'get_store_product';
        var shopify_api = 'products';
        get_api_data(routineName, shopify_api);
        var routineName = 'get_store_blog';
        var shopify_api = 'articles';
        get_api_data(routineName, shopify_api);
        var routineName = 'get_store_pages';
        var shopify_api = 'pages';
        get_api_data(routineName, shopify_api);
        var routineName = 'get_store_collection';
        var shopify_api = 'custom_collections';
        get_api_data(routineName, shopify_api);


    });

</script>
<?php  include_once('dashboard_footer.php'); ?>