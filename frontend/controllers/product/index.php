<?php

//Data
$title = "Shop Simple One";

//Lấy dữ liệu từ DB
$pro = new Product();
$products = $pro->getAll('products');

//Phan Trang
if(isset($_GET['page'])) $current_page = $_GET['page'];
else $current_page = 1;

$total_product = count($products);
$product_per_page = 2;
$total_page = ceil($total_product/$product_per_page);

$star = (($current_page - 1) * $product_per_page) + 1;
$end = $current_page * $product_per_page;
if($end > $total_product)
{
	$end = $total_product;
}

$p_products = get_product_subset($star,$end,$products);


require_once('frontend/views/product/index.php');