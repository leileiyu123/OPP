<?php
	include_once "../day_03/vchat_common.php";
	$code = $_GET["code"];
	session_start();
	if(isset($_SESSION["code"])){
        $code = $_SESSION["code"];
        //第二步：通过code换取网页授权access_token,正确时返回JSON数据包
        $api = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";
        $result = httpGet($api);
        var_dump($result);
        session_destroy();
        $arr = json_decode($result,true);
        $access_token = $arr["access_token"];
        $openid = $arr["openid"];
        //第四步：拉取用户信息
        $userUrl = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
        $json = httpGet($userUrl);
        //var_dump($json);
        $userArr = json_decode($json,true);
        $img = $userArr["headimgurl"];
        //var_dump($userArr);
    }else{
    		$_SESSION["code"] = $code;
    }
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title>Game</title>
		<style type="text/css">
			*,body {
				padding: 0;
				margin: 0;
			}
			.bg{
				width: 100%;
				height: 100%;
                position: relative;
			}
            
			#enter img{
				text-align: center;
                width:50%;
				position: absolute;
				bottom:0px;
			}
	</style>
	</head>
	<body>
		<div id="box">
			<img class="bg" src="img/小样++游戏页面/修改/封面.png" />
			<div id="enter">
				<img src="img/小样++游戏页面/修改/按钮.png"/>
			</div>
		</div>
	</body>
	<script src="../../php/js/JQuery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		var enter = document.getElementById("enter");
		var openid = '<?php echo $userArr["openid"];?>';
		var nickname = '<?php echo $userArr["nickname"];?>';
		var img = '<?php echo $img;?>';
		enter.addEventListener("click",function(){
			$.ajax({
				type:"get",
				url:"1.user_server.php",
				data:{
					openid:openid,
					nickname:nickname,
					img:img
				},
				//dataType:"json",
				success:function(data){
					console.log("成功");
//					console.log(data);
					window.location.href="http://localhost/OOP/vchat/Game/2.game_second.php";//你可以跟换里面的网址，以便成功后跳转
				},
				error:function(errors){
					console.log("失败");
					console.log(errors);
				}
			});
		},false);
	</script>
</html>