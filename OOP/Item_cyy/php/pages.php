<?php
	include_once "common.php";
 	 $pagesize=10;
 	 $pages="";
	function getPageNum( ){
		global $pagesize;
		$query = "select count(productId) from product";
		$result=mysql_query($query);
		$row=mysql_fetch_row($result) ; 
		$count =$row[0];
		$pages = ceil($count/$pagesize);
		return $pages;
	}
	$pages = getPageNum();

	$pages=$pages-1;
 
		$query ="select * from product limit ".$pages*$pagesize.",".$pagesize;
   		$result=mysql_query($query);
		if (mysql_num_rows($result)) {			 	
		while ( $row = mysql_fetch_assoc($result)) { 
				$arr[]=$row;
			}
		}
		
		$infor[]=$pages;
		$infor[]=$arr;
		$json = json_encode($infor);
		var_dump($json);
?>