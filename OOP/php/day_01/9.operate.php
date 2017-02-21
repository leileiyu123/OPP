<?php
	$arr=array(1,2,3,4);
	$a="";
	foreach($arr as $key => $value){
		$a.=$value;//拼接赋值
		$arr1[] = $value;
	}
	echo $a;
	echo "<hr>";
	print_r($arr1);
	
	echo "<hr>";
	$arrs = array(1,2,3,4,5);
	for($i=0;$i<count($arrs);$i++){
		if($arrs[$i] == 3){
//			break;//结束整个循环
			continue;//结束当前的单次循环
		}
		echo $arrs[$i]."<hr>";
	}
	
//	foreach ($arrs as $val) {
//		echo $val."<hr>";
//	}
	
	$a = 3;
	$b = 2;
	$c = 5;
	if($a>$b&&$c>$b){
		echo "逻辑与.true";
	}else{
		echo "flase";
	}
	
	echo "<hr>";
	if($a>$b||$c<$b){
		echo "逻辑或.true";
	}else{
		echo "flase";
	}
	
	echo "<hr>";
	if(!($a>$c)){
		echo "true";
	}else{
		echo "false";
	}
	
	echo "<hr>";
	if($a>$b xor $c>$b xor $b>$c){//异或：有且仅有一个为true，则返回true
		echo "true";
	}else{
		echo "false";
	}
	
	
?>