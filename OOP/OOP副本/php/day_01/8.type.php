<?php
	$str = "100 hello";
	$num = 200;
	echo $num + $str;
	echo "<hr>";
	//true:返回1 false:返回 空
	echo is_string($str);//查看变量是否属于string类型
	echo "<hr>";
	if(is_string($num)){
		echo "string";
	}else{
		echo "num";
	}
	
?>