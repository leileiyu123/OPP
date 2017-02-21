<?php
	include_once("common.php");
	session_start();
//	var_dump($_SESSION);
	
	$liuyanId = $_GET["id"];
	$userId = $_SESSION["userId"];
	
	$query = "select * from manage where user_id=$userId and liuyan_id=$liuyanId";
	$result = mysql_query($query);
	if(mysql_num_rows($result)==1){
		$row = mysql_fetch_assoc($result);
		$statu = 0;//0代表无操作
		//2代表踩
		if($row["statu"] == 2){
			$str = '{"msg":"请取消踩之后再来顶"}';
			echo $str;
			exit();
		}else if($row["statu"] == 0){
			$statu = 1;//1代表顶
		}
		$manageId = $row['manageId'];
		$query = "update manage set statu=$statu where manageId=$manageId";
		mysql_query($query);
		if(mysql_affected_rows()==1){
			$query = "select count(*) from manage where liuyan_id=$liuyanId and statu=1";
			$result = mysql_query($query);
			if(mysql_num_rows($result)==1){
				$row = mysql_fetch_row($result);
				$count = $row[0];
				$query = "update liuyan set ding=$count where liuyanId = $liuyanId";
				mysql_query($query);
				if(mysql_affected_rows()==1){
					echo '{"errorcode":0,"count":"'.$count.'"}';
				}
			}
		}
	}else{
		$query = "insert into manage (user_id,liuyan_id,statu) values ($userId,$liuyanId,1)";
		mysql_query($query);
		if(mysql_affected_rows()==1){
			$query = "select count(*) from manage where liuyan_id=$liuyanId and statu=1";
			$result = mysql_query($query);
			if(mysql_num_rows($result)==1){
				$row = mysql_fetch_row($result);
				$count = $row[0];
				$query = "update liuyan set ding=$count where liuyanId = $liuyanId";
				mysql_query($query);
				if(mysql_affected_rows()==1){
					echo '{"errorcode":0,"count":"'.$count.'"}';
				}
			}
		}
	}

?>