<?php
	include_once("common.php");
	
	$content = $_GET["content"];
	$times = time();
	
	$query = "insert into liuyan (content,times) values ('$content','$times')";
	$result = mysql_query($query);
//	if(mysql_affected_rows()==1){
//		//找主键id
//		$id = mysql_insert_id();
//		$query = "select * from liuyan where liuyanId = $id";
//		$result = mysql_query($query);
//		if(mysql_num_rows($result) == 1){
//			$row = mysql_fetch_assoc($result);
//			$arr[]=$row;
//			$json = json_encode($row);
//			echo $json;
//			echo $times;
//		}
//	}
	include_once("ajax_select.php");

?>