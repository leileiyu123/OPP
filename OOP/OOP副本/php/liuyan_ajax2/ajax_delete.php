<?php
	include_once("common.php");
	
	$page = $_GET["page"];
	$liuyanId = $_GET["id"];
	
	$row = "";
	$query = "select * from liuyan where deleteId=0 order by times desc limit ".($page+1)*$pagesize.",1";
	$result = mysql_query($query);
	if(mysql_num_rows($result)==1){
		$row = mysql_fetch_assoc($result);
	}
	
	$query = "update liuyan set deleteId = 1 where liuyanId=$liuyanId";
	mysql_query($query);
	if(mysql_affected_rows()==1){
		if($row){
			$arr[]=$row;
			$arr["errorcode"] = 0;
		}else{
			$arr["errorcode"] = 1;
//			$arr["page"] = 1;
		}
		
		$size = 0;
		$query = "select count(*) from liuyan where deleteId = 0";
		$result = mysql_query($query);
		if(mysql_num_rows($result)==1){
			$row = mysql_fetch_row($result);
			$size = $row[0];
		}
		$pages = ceil($size/$pagesize);
		$arr["page"] = $pages;
		
		echo json_encode($arr);
	}
	

?>