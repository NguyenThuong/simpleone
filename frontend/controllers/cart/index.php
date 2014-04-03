<?php
//load Model Cart

// //Form submit
// if(!empty($_POST))
// {
// 	foreach ($_POST as $pid => $number) {
// 		cart_update($pid, $number);
// 	}
// 	header('location: ?controller=cart&action=index');
// }

//Data
$title = "Giỏ Hàng";
$cart = cart_list();

//Load View
require('frontend/views/cart/index.php');