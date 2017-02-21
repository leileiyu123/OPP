<?php
	session_start();
	if(isset($_SESSION["userId"])){
		echo "欢迎登录";
	}else{
		header("location:5.login.html?id=111");
	}

?>