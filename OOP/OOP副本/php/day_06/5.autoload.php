<?php
	//自动加载文件class_name中的类
	function __autoload($class_name){
		echo "我被调用了";
		var_dump($class_name);
		include_once("$class_name"."_class.php");
		
	}
	
	//实例化对象时，如果类不存在，则调用__autoload()函数，其参数为类名
	$person1 = new Person("mm",588);
	$person1->info();
	echo "<hr>";
	
	$children = new Children("mimi",366,999);
	$children->info();

?>