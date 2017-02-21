<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("books");
	mysql_query("set name utf-8");
	$query = "select * from books";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$obj = json_encode($row);
			$arr = explode(",", $obj);
			var_dump($arr);
			foreach ($arr as $key => $value) {
//				foreach ($value as $keys => $values) {
					$query = "insert into books ($key) vaules ('$value')";
					mysql_query($query);
//				}
				
			}
			
		}
	}

?>