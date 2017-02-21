<?php
	$num = 0;
	function nums(){
		// 全局变量 在方法中 不能直接使用，
		// 第一种使用方法
		$ccc = $GLOBALS["num"];
		echo $ccc;
		
		// 全局变量在 方法中的 第二种 取值方式
		global $num;
		echo $num;
		
	}
	nums();
?>