<?php
#error_reporting(0);

define('BASEURL','http://localhost/simpleone/');
define('BASEPATH', dirname(__FILE__) . '/');

$db = mysql_connect('localhost','root','') or die('Could not connect to Databas: '.mysql_error());
mysql_select_db('shop_db') or die('Could not connect to Databas: '.mysql_error());
mysql_set_charset('utf-8');
