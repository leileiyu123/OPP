<?php
	include_once("common.php");
		
	$page = $_GET["page"];
	$query = "select * from books limit ".$page*'6'.",".'6';
//	echo $query;
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
		while($row = mysql_fetch_assoc($result)){
			$arr[]=$row;
		}
//		var_dump($arr);
		echo json_encode($arr);
	}
		

?>