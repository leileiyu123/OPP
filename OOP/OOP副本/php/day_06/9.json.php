<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("books");
	mysql_query("set names utf8");
	$query = "select * from books";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arr[]=$row;
		}
		$str = json_encode($arr);
		file_put_contents("book.txt", $str);
	}
	

?>