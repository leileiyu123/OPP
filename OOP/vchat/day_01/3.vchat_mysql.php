<?php
	include_once "common.php";
	include_once "vchat_common.php";
	
	function getAccessTokenBySql(){
		global $url;
		$query = "select * from access_token";
		$result = mysql_query($query);
		if(mysql_num_rows($result)==1){
			$row = mysql_fetch_assoc($result);
			if($row["times"] < time()){
				$resultArr = json_decode(httpGet($url),true);
				$access_token = $resultArr["access_token"];
				$times = time()+$resultArr["expires_in"];
				$query = "update access_token set access_token='$access_token',times='$times'";
				mysql_query($query);
			}else{
				$access_token = $row["access_token"];
			}
		}else{
			$resultArr = json_decode(httpGet($url),true);
			$access_token = $resultArr["access_token"];
			$times = time()+$resultArr["expires_in"];
			$query = "insert into access_token (access_token,times) values ('$access_token','$times')";
			mysql_query($query);
		}
		return $access_token;
	}
	
	$access_token = getAccessTokenBySql();
	var_dump($access_token);

?>