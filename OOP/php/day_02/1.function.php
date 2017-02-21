<?php
	//要计算两个数的和
	
	//计算2+3的值并展示
	//无参无返
	function add(){
		echo 2+3;
	}
	add();
	echo "<hr>";
	
	
	//根据我要计算的两个值进行计算，并将结果展示出来
	//有参无返
	function add1($num1,$num2){
		echo $num1 + $num2;
	}
	add1(5,6);
	echo "<hr>";
	
	//使用一个方法得到3+5的值，并将结果返回出来供我使用
	//无参有返
	function add2(){
		return 3+5;
	}
	$sum = add2();
	echo $sum;
	echo "<hr>";
	
	//计算用户提供的两个数值，并将结果返回，以供使用
	//有参有返
	function add3($num1,$num2){
		return $num1+$num2;
	}
	$sum = add3(4,6);
	echo $sum;
?>