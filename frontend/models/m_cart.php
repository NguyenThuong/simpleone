<?php

//Khoi tao gio hang
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();

function cart_add($pid)
{
	if(isset($_SESSION['cart'][$pid]))
	{
		//Neu da co san pham trong gio hang thi so luong tang len 1
		$_SESSION['cart'][$pid]['number']++;
	}
	else
	{
		$m_pro = new Product;
		//Lay thong tin san pham luu vao gio hang
		$product = $m_pro->getOne('products',$pid);
		$_SESSION['cart'][$pid] = array(
			'id' => $pid,
			'name' => $product['name'],
			'image' => $product['image'],
			'number' => 1,
			'price' => $product['price']
		);
	}
}

function cart_update($pid, $number){
    if($number==0){
        //xóa sp ra khỏi giỏ hàng
        unset($_SESSION['cart'][$pid]);
    } else {
        $_SESSION['cart'][$pid]['number'] = $number;
    }
}

function cart_total(){
    $total = 0;
    foreach($_SESSION['cart'] as $product){
        $total += $product['price'] * $product['number'];
    }
    return $total;
}

function cart_number(){
    $number = 0;
    foreach($_SESSION['cart'] as $product){
        $number += $product['number'];
    }
    return $number;
}



function cart_delete($pid)
{
	unset($_SESSION['cart'][$pid]);
}

function cart_list()
{
	return $_SESSION['cart'];
}

function cart_destroy(){
    $_SESSION['cart'] = array();
}


function save($table, $data = array()) {
    //xử lý dữ liệu $data
    $values = array();
    foreach ($data as $key => $value) {
        $value = mysql_real_escape_string($value);
        $values[] = "`$key`='$value'";
    }

    //lưu dữ liệu: INSERT/UPDATE
    $id = intval($data['id']);
    if ($id > 0) {
        $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE id=$id";
    } else {
        $sql = "INSERT INTO `$table` SET " . implode(',', $values);
    }

    mysql_query($sql) or die(mysql_error());

    $id = ($id>0) ? $id : mysql_insert_id();
    return $id;
}
	
?>