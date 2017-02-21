<?php
	//once只能检测到该行代码之前
	//是否加载过我们要加载的php了
	//如果有就不会再次加载，没有才加载
//	include_once "2.test.php";
	//include用几遍加载几次
	include "2.testwwe.php";
	//如果使用include的时候找不到文件
	//就会报警告但是会继续执行下面的代码
	//如果使用的是require，找不到文件
	//就不会再执行下面的php代码了
	require "2.testwwe.php";
	echo "我是test1";
	echo "world<hr>";
	
?>