<?php 
	// $_GET 代表 我们 get 请求传过来的 参数
	// 他是 一个 超全局变量，并且是一个 关联数组
    print_r($_GET);
	$user = "leilei";
	$pass = "123";
	// 想要 去取关联数组中 的 key 对应的值 如下
	// 并且，如果 我要取出来的 key 不存在， 会报错
	$name = $_GET["username"];
	$password = $_GET["password"];
	
	echo "<hr>";
	
	// 如果 要对 我们的关联数组 进行循环
	// 使用我们的 foreach 方法
	// 第一个值 是要 循环谁
	// 第二个值 是当前循环的 key
	// 第三个值 是当前 key 所对应的值
	foreach($_GET as $key => $value){
		// 使用 变量的变量 实现
		// 接受变量的 简化
		// $key = "username";
		$$key = $value;
		echo $$key;
//		echo $key."是".$value."<hr>";
	}
	
	echo "<hr>"; 
	
	
	
	if($user == $name && $pass == $password){
		echo "登录成功，欢迎光临";
	}else{
		echo "登录失败";
	}

?>