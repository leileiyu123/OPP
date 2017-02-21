<?php
	include_once "../day_03/sae_sql.php";
	$nickname = $_GET["nickname"];
	$openid = $_GET["openid"];
	$img = $_GET["img"];
	
	$query = "select * from user where openid = '$openid'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)<0){
		$query = "insert into user (openid,nickname,img) values ('$openid','$nickname','$img')";
		mysql_query($query);
	}

?>