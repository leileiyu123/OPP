<?php
	//函数名不区分大小写，且同文件中不能出现同名函数
	//原因：php不支持函数重载
	//有参无返
	function sum($name){
		echo "hello,{$name}fff";
	}
	sum("leilei");
	
	//有参有返
	echo "<hr>";
	function person($name,$age){
		echo "hello,{$name}fff";
		return $age;
	}
	$ages = person("leilei",18);
	echo $ages;
	
	echo "<hr>";
	$nums = 3;
	function num(&$nums){//&取地址符，传址操作；若不加&结果为3
		$nums++;
	}
	num($nums);
	echo $nums;
	
	echo "<hr>";
	//可选参数：一般往后放  必选参数：必须往前放
	//设置默认值：在参数后面直接设置 如：$pass=1，往后放
	function aa($name,$pass=1){
		echo $pass;
	}
	aa("yl",123);//函数传的参数 123 会覆盖给pass设置的默认值1
	echo "<hr>";
	
	//变量作用域和生命周期
	$str = 'hello php'; 
	echo '1:'.$str.'<br />';
	function change(){
		$str = 'hello everyone';
		echo '2:'.$str.'<br />';
	}
	change(); 
	echo '3:'.$str;
	
?>