<?php
	include_once "common.php";
	$data=[];
 	$dataFloor=[];
// 	存放cheap表
 	$row=[];
 // 	存放floorTitle表
 	$rowFloor=[];
//	获取楼层数据和cheap以及florTitle表
	function floors($table){
		$query="select * from " . $table .' limit 5';
		$result=mysql_query($query);
		
		if (mysql_num_rows($result)) {
		 while ($row = mysql_fetch_assoc($result)) {
		 	$arrOne[]=$row; 
	 		 } 
	 	}
	 	 return $arrOne;
	}
	 $dataFloor[0]=floors("onef");
	 $dataFloor[1]=floors("twof");
	$dataFloor[2]=floors("threef");
	$dataFloor[3]=floors("fourf");
	$data[0]= floors("cheap");
	$data[1]= floors("floorTitle");
	$data[2]=$dataFloor;
	$msg =json_encode($data);
   
	echo  $msg;

	
?>