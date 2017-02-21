<?php
	include_once "common.php";
	$name = $_POST["username"];
	$pass = $_POST["password"];
	
	session_start();
	
	$query = "select * from user where name='$name' and password='$pass'";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result) == 1){
		$row = mysql_fetch_assoc($result);
//		var_dump($row);
		$_SESSION["userId"] = $row["userId"];
//		var_dump($_COOKIE);
		setcookie("username",$name,time()+3600*24*7);
		setcookie("password",$pass,time()+3600*24*7);	
		echo "登录成功";	
		
	}else{		
		echo "登录失败";	
	}
	echo "<a href='3.index.php'>个人主页</a>";
?>
