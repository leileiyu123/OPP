<?php
	header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');//此时使用东八区时间
	
	$db = @mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	
	mysql_select_db(SAE_MYSQL_DB, $db);
	
	mysql_query("set names utf8"); //解决乱码问题 
?>