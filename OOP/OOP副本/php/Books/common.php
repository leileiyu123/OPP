<?php 
    header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');//此时使用东八区时间
	
	mysql_connect("localhost","root","");//连接mysql
	mysql_select_db("books");//连接数据库
	
	mysql_query("set names utf8"); //解决乱码问题 
?>