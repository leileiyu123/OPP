<?php
	$name = $_POST["name"];
	
	$db = mysql_connect("localhost","root","");
	mysql_select_db("myfirstsql");
	mysql_query("set names utf8");
	
	$query = "select * from user where name='$name'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)==1){
		echo '{"msg":"用户名已存在","errcode":1}';
//		echo "该用户名已经被占用，请重新注册";
	}else{
		echo '{"msg":"用户名可用","errcode":0}';
	}

?>