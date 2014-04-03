<?php
$pro = new Product();
$cid = intval($_GET['cid']);
$category = $pro->getOne('categories',$cid);

if(!$category)
{
	show_404();
}

$title = $category['name'];

$categories = $pro->getCat();

//Lay tat ca san pham trong danh muc va con cua no
$in_categories = categories_child(menu_list($categories), $cid);
$in_categories[] = $cid;

//Phan Trang
if(isset($_GET['page'])) $page = intval($_GET['page']);
else $page = 1;

$page = ($page>0) ? $page : 1;
$limit = 6;
$star = ($page - 1) * $limit;

$options = array(
	'where' => 'category_id IN ('.implode(',', $in_categories).')',
    'limit' => $limit,
    'offset' => $star,
    'order_by' => 'id DESC'
);

$url = alias($category['name']).'-c'.$category['id'].'.html';
$total_rows = $pro->get_total('products', $options);
$total = ceil($total_rows/$limit);

//San pham va phan trang
$p_products = $pro->get_all('products', $options);
$pagination = pagination($url, $page, $total, '?');

//load view
require('frontend/views/category/index.php');