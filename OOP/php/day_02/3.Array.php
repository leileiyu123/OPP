<?php
	$arr = array(1,2,3);
	var_dump($arr);
	echo "<hr>";
	
	
	$color = array("r"=>"red","b"=>"blue");
	var_dump($color);
	echo "<hr>";
	
	$arr1[] = "aaa";
	$arr1[] = "bbb";
	var_dump($arr1);
	echo "<hr>";
	
	$array["a"] = "hahh";
	$array["b"] = "hehe";
	//哪怕是前面设置了几个键值对了
	//但是当不设置key时还是会从0开始设置
	$array[] = "heihei";
	var_dump($array);
	echo "<hr>";
	
	//range的第三个参数step：如果给出了 step 的值，它将被作为单元之间的步进值。
	//step 应该为正值。如果未指定，step 则默认为 1。
	$numArr = range(0, 100,10);
	var_dump($numArr);
	echo "<hr>";
	
	$letter = range("a","z",2); 
	var_dump($letter);
	echo "<hr>";
	$letter[] = "1";
	$letter[] = "2";
	print_r($letter);
	unset($letter[0]);//删除数组元素
	echo "<hr>";
	print_r($letter);
	echo "<hr>";
	echo in_array("3", $letter);//检测数组中是否包含某个值 包含：返回1  不包含：空
	
?>