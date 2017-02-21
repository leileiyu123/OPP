<?php
	include_once "vchat_common.php";
	$score = $_GET["score"];
	
	$code = $_GET["code"];
	$api = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";
	$result = httpGet($api);
//	var_dump($result);
	$arr = json_decode($result,true);
	$access_token = $arr["access_token"];
	$openid = $arr["openid"];
	$userUrl = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
	$json = httpGet($userUrl);
	//var_dump($json);
	$userArr = json_decode($json,true);
	//var_dump($userArr);
	$nickname = $userArr["nickname"];
	$openid = $userArr["openid"];
	$img = $userArr["headimgurl"];
	
	global $url;
	// 连主库
	$db = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
		
	// 连从库
	// $db = mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	
	mysql_select_db(SAE_MYSQL_DB, $db);
	
	$query = "select * from test where openid = '$openid'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)==1){
		$row = mysql_fetch_assoc($result);
		if($row["score"]<$score){
			$query = "update test set score=$score where openid='$openid'";
			mysql_query($query);
		}
	}else{
		$query = "insert into test (nickname,openid,score,img) values ('$nickname','$openid','$score','$headimgurl')";
		mysql_query($query);
		
	}
	$query = "select * from test order by score desc limit 5";
	$result = mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arr[]=$row;
		}
		echo json_encode($arr);
	}

?>