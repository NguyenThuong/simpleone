<?php

//Data
$title = "Thế Giới Di Động";

//Lấy dữ liệu từ DB
$pro = new Product();
$products = $pro->getAll('products');

//Phan Trang
if(isset($_GET['page'])) $page = intval($_GET['page']);
else $page = 1;

$page = ($page>0) ? $page : 1;
$limit = 6;
$star = ($page - 1) * $limit;



$url = '?controller=product&action=index';
$total_rows = count($products);
$total = ceil($total_rows/$limit);

//San pham va phan trang
$p_products = $pro->getLimit('products', $star, $limit);
$pagination = pagination($url, $page, $total, '&');

require_once('frontend/views/product/index.php');