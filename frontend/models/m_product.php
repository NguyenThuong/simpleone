<?php
class Product{
	
	public function getAll($table)
	{
		$query = "SELECT * FROM $table ORDER BY id ASC";
		$result = mysql_query($query) or die(mysql_error());
		$data = array();
		while($row = mysql_fetch_assoc($result))
		{
			$data[] = $row;
		}
		return $data;

	}

	public function getLimit($table, $star, $limit)
	{
		$query = "SELECT * FROM $table ORDER BY id DESC LIMIT $star, $limit";
		$result = mysql_query($query) or die(mysql_error());
		$data = array();
		while($row = mysql_fetch_assoc($result))
		{
			$data[] = $row;
		}
		return $data;

	}

	public function getOne($table, $pid)
	{
		$query = "SELECT * FROM $table WHERE id = '$pid'";
		$result = mysql_query($query) or die(mysql_error());
		//$data = array();
		$data = mysql_fetch_assoc($result);

		return $data;
	}

	public function getCat()
	{
		$query = "SELECT id, parent_id, name FROM categories ORDER BY parent_id ASC, position ASC";
		$result = mysql_query($query) or die(mysql_error());
		$data = array();
		while($row = mysql_fetch_assoc($result))
		{
			$data[] = $row;
		}
		return $data;
	}

	public function get_total($table, $options = array()) {
	    //xử lý $options
	    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';

	    //truy vấn        
	    $sql = "SELECT COUNT(*) as total FROM `$table` $where";
	    $query = mysql_query($sql) or die(mysql_error());

	    //dữ liệu trả về
	    $row = mysql_fetch_assoc($query);

	    return $row['total'];
	}

	public function getProCat($table, $options = array())
	{
		//xử lý $options
		$select = isset($options['select']) ? $options['select'] : '*';
	    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
	    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
	    $limit = isset($options['star']) && isset($options['limit']) ? 'LIMIT ' . $options['star'] . ',' . $options['limit'] : '';

	    //truy vấn
	    $sql = "SELECT $select FROM `$table` $where $order_by $limit";
	    $query = mysql_query($sql) or die(mysql_error());

	    //dữ liệu trả về
	    $data = array();
	    if (mysql_num_rows($query) > 0) {
	        while ($row = mysql_fetch_assoc($query)) {
	            $data[] = $row;
	        }
	        mysql_free_result($query);
	    }

	    return $data;	
	}


}

