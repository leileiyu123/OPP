<?php
	$fh = fopen("2.index.txt", "r");
//	var_dump($fh);
	
	$str = fread($fh, filesize("2.index.txt"));
	echo $str;
	echo "<hr>";
	fclose($fh);
	
	
	$fh = fopen("2.index.txt", "r");
	$str = fgets($fh);
	echo $str;
	echo "<hr>";
	$str = fgets($fh);
	echo $str;
	echo "<hr>";
	fclose($fh);
	
	$fh = fopen("2.index.txt", "r");
	while(!feof($fh)){
		$str = fgets($fh);
		echo $str."<hr>";
	}
	fclose($fh);
	
	$arr = file("2.index.txt");
	var_dump($arr);
	echo "<hr>";
	
	$string = file_get_contents("2.index.txt");
	echo $string;

		
?>