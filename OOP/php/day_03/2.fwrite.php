<?php
//	$page = filesize("2.fangwen.txt");
//	echo "<hr>";
	//第二个参数：w表示替换，a表示追加
//	$fh = fopen("2.fangwen.txt", "w+");
	//如果我们的权限是w或w+就会截断
	//会影响到我们下面的操作
	//filesize都没法获取我们文件的大小了
	//所有如果要在这种情况下使用需要将 filesize 放在外面去获取
	//而且w的截断会给我们下面的操作造成影响
	//导致我们想要的效果无法实现
	//所以一般都是使用我们的file_get_contents和file_put_contents来完成我们的操作
//	$nnn = fread($fh, $page);
//	fwrite($fh, $nnn);
//	fclose($fh);
	
	$str = "hello";
	//file_put_contents默认为替换
	//但如果第三个参数为FILE_APPEND 则为追加
	file_put_contents("1.index.txt", $str,FILE_APPEND);
	
	
	$num = file_get_contents("2.fangwen.txt");
	echo $num."内容";
	$num++;
	echo "<h1>该网页访问了{$num}次</h1>";
	//该方法可以通过设置第三个属性来让写入变成
	//追加的形式，默认是覆盖的形式
	file_put_contents("2.fangwen.txt", $num);
	
	
?>