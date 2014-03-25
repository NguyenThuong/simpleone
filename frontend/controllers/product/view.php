<?php
//Data
$pid = intval($_GET['pid']);
$pro = new Product();
$products = $pro->getOne('products',$pid);

if(!$products)
{
	show_404();
}

$title = $products['name'];

//Load View
require_once('frontend/views/product/view.php');