<?php
	//数组的两种书写方式
	//方法一
	$arr = array(1,2,3);
	//方法二
//	$arr[] = 1;
//	$arr[] = 2;
//	$arr[] = 3;
	var_dump($arr);//能够传出数组中数据的类型
	echo "<hr>";
	print_r($arr);
	echo "<hr>";
	echo $arr[0];
	echo "<hr>";
	$arr["haha"] = "ccc";//给数组添加元素，可在[]中设置key ,"ccc"为value
	print_r($arr);
	echo "<hr>";
	echo $arr["haha"];
?>