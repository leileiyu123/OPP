<?php
	$name = "leilei";
	$password = "123";
	$json = '{"name":"'.$name.'","password":"'.$password.'"}';
	
	//对json格式的字符串进行编码
	//给一个参数，得到的是一个对象
	//给第二个参数true,则得到的是一个关联数组
	$whats = json_decode($json,true);
	
	var_dump($whats);
	
	$arr = array("id"=>"hdwoifdhp");
	echo "<hr>";
	//对变量进行 JSON 编码 
	echo json_encode($arr);
	
	$arr1["name"] = $name;
	$arr1["password"] = $password;
	echo "<hr>";
	echo json_encode($arr1);

?>