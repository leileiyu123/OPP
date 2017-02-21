<?php
	include_once("common.php");
	
	$liuyanId = $_GET["liuyanId"];
	$page = $_GET["pages"];

	$query = "update liuyan set deleteId = 1 where liuyanId=$liuyanId";
	mysql_query($query);
	

	$pagesize = 5;
	$size = 0;
	$query = "select count(*) from liuyan where deleteId = 0";
	$result = mysql_query($query);
	if(mysql_num_rows($result)==1){
		$row = mysql_fetch_row($result);
		$size = $row[0];
	}
	$pages = ceil($size/$pagesize);
	$arr["page"] = $pages;
	
	$query = "select * from liuyan where deleteId = 0 order By times desc limit ".$page*$pagesize.",".$pagesize;
	$result = mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arr[]=$row;
		}
		$json = json_encode($arr);
		echo $json;
	}
	
	
?>