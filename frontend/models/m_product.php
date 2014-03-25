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
}