<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("books");
	mysql_query("set names utf8");
	
	$xml = simplexml_load_file('book.xml');
//	var_dump($xml);
	echo "<hr>";
	$book = $xml->xpath("book");
//	var_dump($book);
	
	foreach ($book as $key => $value) {
		foreach ($value as $keys => $values) {
			$str .= $values.","; 
			
			
//			$query = "insert into books ($keys) values ('$values')";
//			mysql_query($query);
		
//			echo $keys.$values;
//			echo "<hr>";
		}
		
		
//		var_dump($value->name);
//		echo $value->name
//		echo "<hr>";
	}
	echo $str;
	$arr = explode(",", $str);
	var_dump($arr);
	

?>