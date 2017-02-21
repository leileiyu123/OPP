<?php
	include_once "vchat_common.php";
	
	function saeAccessToken(){
		global $url;
		// 连主库
		$db = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
		
		// 连从库
		// $db = mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
		
		if ($db) {
		    mysql_select_db(SAE_MYSQL_DB, $db);
			$query = "select * from access_token";
			$result = mysql_query($query);
			if(mysql_num_rows($result)==1){
				$row = mysql_fetch_assoc($result);
				if($row["times"]<time()){
					$arr = json_decode(httpGet($url),true);
					$access_token = $arr["access_token"];
					$times = time() + $arr["expires_in"]/2;
					$query = "update access_token set access_token='$access_token',times='$times'";
					mysql_query($query);
				}else{
					$access_token = $row["access_token"];
				}
			}else{
				$arr = json_decode(httpGet($url),true);
				$access_token = $arr["access_token"];
				$times = time() + $arr["expires_in"]/2;
				$query = "insert into access_token (access_token,times) values ('$access_token','$times')";
				mysql_query($query);
			}
		}
		return $access_token;
	}
	$access_token = saeAccessToken();
	var_dump($access_token);
	

?>