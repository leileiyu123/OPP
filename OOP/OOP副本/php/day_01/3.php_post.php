<?php 
    print_r($_POST); 
	$user = "leilei";
	$pass = 123;
	
	$name = $_POST["uesername"];
	$password = $_POST["password"];
	echo $name;
	
	if($user==$name&&$pass==$password){
		echo "恭喜你，登录成功";
	}else{
		echo "登录失败";
	}
?>