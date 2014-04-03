<?php
ob_start();
session_start();

require_once('config.php');
require_once('library/function.php');
require_once('frontend/models/m_product.php');
require_once('frontend/models/m_cart.php');

//Xử lý request từ trình duyệt và gọi controller/action tương ứng
if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'product';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

$file = 'frontend/controllers/'.$controller.'/'.$action.'.php';
if(file_exists($file))
{
	require_once($file);
}
else
{
	show_404();
}

mysql_close($db);

