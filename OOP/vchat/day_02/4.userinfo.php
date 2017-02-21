<?php
	include_once "vchat_common.php";
	$code = $_GET["code"];
	//第二步：通过code换取网页授权access_token,正确时返回JSON数据包
	$api = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";
	$result = httpGet($api);
//	var_dump($result);
	$arr = json_decode($result,true);
	$access_token = $arr["access_token"];
	$openid = $arr["openid"];
	//第四步：拉取用户信息
	$userUrl = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
	$json = httpGet($userUrl);
	var_dump($json);
	$userArr = json_decode($json,true);
	$img = $userArr["headimgurl"];
	var_dump($userArr);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title></title>
	</head>
	<body>
		<img id="imgs" src="<?php echo $img;?>"/>
	</body>
	<script type="text/javascript">
		var url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx9569fcaa6b4199d7&redirect_uri=http://leileiyu.applinzi.com/day_02/hello.php&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
	</script>
</html>