<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("myfirstsql");
	mysql_query("set names utf8");
	
	$cb = $_GET["ccc"];
	$name = $_GET["user"];
	
	$query = "select * from user where name = '$name'";
	$result = mysql_query($query);
	$msg = '{"msg":"没有符合条件的用户"}';
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arr[]=$row;
		}
		$msg = json_encode($arr);
	}
	echo $cb."(".$msg.")";
	
	

?>