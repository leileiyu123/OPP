<?php
//	$str = "hi boy";
//	$fh = fopen("3.fangwen.txt", "a");
//	fwrite($fh, $str);
//	fclose($fh);
//	
//	$str = "hello";
//	file_put_contents("3.fangwen.txt", $str,FILE_APPEND);
	
	
	$num = file_get_contents("3.fangwen.txt");
	echo $num."内容";
	$num++;
	echo "<h1>该网页访问了{$num}次</h1>";
	file_put_contents("3.fangwen.txt", $num);	
?>