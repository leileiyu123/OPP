<?php
	$path = "/home/www/data/users.txt";
	//basename 返回路径中的文件名部份
	//当指定了可选参数(第二个参数)会将这部分内容去掉;
//	$url = basename($path);
	$url = basename($path,".txt");
	//dirname 返回路径中的目录部份;
	$dir = dirname($path);
	echo $url;
	echo "<hr>";
	echo $dir;
	echo "<hr>";
	//pathinfo 返回一个关联数组，
	//其中包括路径中的四个部份：目录名 dirname，文件名 filename， extension扩展名，basename文件名+扩展名(如果有扩展名的话)
	$arr = pathinfo($path);
	var_dump($arr);
?>