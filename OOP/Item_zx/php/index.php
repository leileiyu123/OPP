<?php
	include_once "common.php";
	$data=[];
 	$dataFloor=[];
// 	存放cheap表
 	$row=[];
 // 	存放floorTitle表
// 	$rowFloor=[];
//
//	 $dataFloor[0]=floors("onef");
//	 $dataFloor[1]=floors("twof");
//	$dataFloor[2]=floors("threef");
//	$dataFloor[3]=floors("fourf");
//	$data[0]= floors("cheap");
//	$data[1]= floors("floorTitle");
//	$data[2]=$dataFloor;
//	$msg =json_encode($data);
//// $query="select * from " . $table .' limit 5';
////	$result=mysql_query($query);
//	echo  $msg;
//
//	



//多表查询先查主表，再查字表
	function getId($table,$tableId ){
		$query="select " .$tableId. " from " .$table. " limit 5";
		$result=mysql_query($query);
		if (mysql_num_rows($result)) {
		 while ($row = mysql_fetch_assoc($result)) {
		 	$arrOne[]=$row[$tableId]; 
	 		 } 
	 	}
	 	 return $arrOne;
	}
		$arrs= getId("cheap","cheapid");
	function getProduct($table,$tableId){
		  global $arrs;
		for ($i=0; $i < count($arrs); $i++) { 
		$query="select  * from  product where cheapid = " .$arrs[$i];
		$result=mysql_query($query);
		if (mysql_num_rows($result)) {
		 while ($row = mysql_fetch_assoc($result)) {
		 		$product[]=$row; 
	 		 } 
	 	}
	}
	return $product;
}
//单表查询
	function geOneTable($table,$tableId,$num ){
		if ($num=="n") {
			$query="select " .$tableId. " from " .$table;
		} else {
			$query="select " .$tableId. " from " .$table. " limit ".$num;
		}
		 $result=mysql_query($query);
		if (mysql_num_rows($result)) {
		 while ($row = mysql_fetch_assoc($result)) {
		 	$one[]=$row; 
	 		 } 
	 	}
	 	 return $one;
	}
	
	$productCheap = getProduct("cheap","cheapid");
	$floors[]=getProduct("onef","oneid");
	$floors[]=getProduct("twof","twoid");
	$floors[]=getProduct("threef","threeid");
	$floors[]=getProduct("fourf","fourid");
//多表里面的cheap
	$product[]=$productCheap;
	//单表里面的floorTitle
	$product[]= geOneTable("floorTitle","*",4);
	$product[]=$floors;
	//单表里面的onef
	$product[]= geOneTable("onef","productFather,oneid","n");
//	$product[]= geOneTable("twof","productFather,twoid","n");
////	$product[]= geOneTable("threef","productFather,threeid","n");
//	$product[]= geOneTable("fourf","productFather,fourid","n");
 
	$msg =json_encode($product);
	echo $msg;
?>