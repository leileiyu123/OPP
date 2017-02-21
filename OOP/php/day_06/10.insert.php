<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("books");
	mysql_query("set names utf8");
	
	$str = file_get_contents("book.txt");
	echo $str;
	echo "<hr>";
	$arr = json_decode($str,true);
	var_dump($arr);
	
	foreach ($arr as $key => $value) {
		echo "<hr>";
		$str = "insert into books (";
		$valuestr = "";
		foreach ($value as $keys => $values) {
			if($keys != "bookId"){
				$str .= $keys.",";
				$valuestr .= "'".$values."',";
			}
			
		}
		
		$str = substr($str,0,-1);
		$valuestr = substr($valuestr, 0,-1);
		
		$str .= ") values (";
		$str .= $valuestr.")";
//		var_dump($str);
//		var_dump($valuestr);
		mysql_query($str);
		
	}

?>