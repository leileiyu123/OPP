<?php
	include_once "sae_sql.php";
	$nickname = $_GET["nickname"];
	$openid = $_GET["openid"];
	$score = $_GET["score"];
	$img = $_GET["img"];
	
	$query = "select * from rank where openid = '$openid'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)==1){
		$row = mysql_fetch_assoc($result);
		if($row["score"]<$score){
			$query = "update rank set score=$score where openid='$openid'";
			mysql_query($query);
		}
	}else{
		$query = "insert into rank (openid,nickname,score,img) values ('$openid','$nickname','$score','$img')";
		mysql_query($query);
	}
	$query = "select * from rank order by score desc limit 5";
	$result = mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arr[]=$row;
		}
		echo json_encode($arr);
	}

?>