<?php
/**
 * Chuyển hướng đến trang báo lỗi 404
 */
function show_404(){
    header('HTTP/1.1 Not Found 404', true, 404);
    require(BASEPATH.'404.php');
    exit();
}

function get_product_subset($star,$end,$products)
{
	$subset = array();
	$position = 0;
	foreach($products as $product)
	{
		$position += 1;
		if($position >= $star && $position <= $end)
		{
			$subset[] = $product;
		}

	}
	return $subset;
}

