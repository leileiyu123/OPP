<?php
	$arr["a"] = "102";
	$arr["c"] = "123";
	$arr["b"] = "132";
	$arr["d"] = "1024";
	
	var_dump($arr);
	//使用sort对关联数组进行排序
	//key值会变成0123这种形式
	//在很多情况下不合适
//	sort($arr);//对数组进行升序
	rsort($arr);//对数组进行降序
	echo "<hr>";
	var_dump($arr);
	echo "<hr>";
	
	$array = array("lan","ou","ke","ji");
	var_dump($array);
	echo "<hr>";
//	ksort($array);//对数组按索引进行升序，并保持索引关系
	krsort($array);//对数组按索引进行降序，并保持索引关系
	var_dump($array);
	
	
	
?>