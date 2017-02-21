<?php
	include_once "../../vchat/day_01/vchat_common.php";
	
	function getAccess_token(){
		global $url;
		$json = file_get_contents("access_token.txt");
		$arr = json_decode($json,true);
		if($arr["expires_in"]<time()){
			$result = httpGet($url);
			$resultArr = json_decode($result,true);
			$access_token = $resultArr["access_token"];
			$times = time()+$resultArr["expires_in"]/2;
			$setArr["access_token"] = $access_token;
			$setArr["expires_in"] = $times;
			$str = json_encode($setArr);
			file_put_contents("access_token.txt", $str);
		}else{
			$access_token = $arr["access_token"];
		}
		return $access_token;
	}
	$access_token = getAccess_token();
	var_dump($access_token);

?>