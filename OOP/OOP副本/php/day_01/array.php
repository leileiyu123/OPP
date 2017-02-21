<?php
	//用随机函数产生数组以及数组的相关操作
	$num = range(1, 10);
	 print_r($num); 
	echo "<hr>";
	unset($num[0],$num[1]);//删除数组元素
	 print_r($num); //打印数组
	echo "<hr>";
	echo in_array(10, $num);//检测数组中是否包含某个值 包含：返回1  不包含：空
	echo "<hr>";
	 echo count($num);//取得数组大小(长度)

	echo "<hr>";
	ksort($num);//对数组按索引进行升序，并保持索引关系
	 print_r($num);
	echo "<hr>";
	krsort($num);//对数组按索引进行降序，并保持索引关系
	 print_r($num);
	
	echo "<hr>";
	sort($num);//对数组进行升序
	 print_r($num);
	echo "<hr>";
	rsort($num);//对数组进行降序
	 print_r($num);
	
	echo "<hr>";
	$result = array(
		array(
			'pname'=> 'nokia n73',
			'price'=> 1500,
		),
		array(
			'pname'=> 'nokia 5800',
			'price'=> 2000,
	 	),
	);
	 print_r($result);
	
?> 