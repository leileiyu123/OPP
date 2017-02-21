<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("myfirstsql");
	mysql_query("set names utf8");
	
	$name = $_POST["username"];
	$pass = $_POST["password"];
	
	$query = "select * from user where name ='$name' and password='$pass'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)==1){
		$row = mysql_fetch_assoc($result);
		session_start();
		//session存储于服务器，只能用PHP来获取里面的数据
		$_SESSION["userId"]=$row["userId"];
		header("Location:liuyan2.html");//跳转
	}else{
		header("Location:login.html");//跳转
	}
	
?>