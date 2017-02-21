<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("myfirstsql");
	mysql_query("set names utf8");
	
	$cb = $_GET["cb"];
	$name = $_GET["name"];
//	$cb = "success";
	$users = '{"msg":"对不起，没有此用户"}';
	$query = "select * from user where name like '%$name%'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_assoc($result)){
			$arr[]=$row;
		}
		$users = json_encode($arr);
	}
	
	echo $cb."(".$users.")";

?>