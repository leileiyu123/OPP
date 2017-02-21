<?php
	$path = "/home/www/data/users.txt";
	$url = basename($path);
//	$url = basename($path,".txt");
	$str = dirname($path);
	echo $url;
	echo "<hr>";
	echo $str;
	echo "<hr>";
	
	$string = pathinfo($path);
	var_dump($string);
	

?>