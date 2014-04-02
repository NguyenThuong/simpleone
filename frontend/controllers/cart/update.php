<?php

//Form submit
if(!empty($_POST))
{
	foreach ($_POST['number'] as $pid => $number) {
		if(isset($_SESSION['cart'][$pid])){
			cart_update($pid, $number);
		}
		
	}
	header('location: ?controller=cart&action=index');
}