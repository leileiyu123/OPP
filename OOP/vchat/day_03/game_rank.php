<?php
	include_once "vchat_common.php";
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

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title></title>
		<style type="text/css">
            #box{
                text-align:center;
            }
			#content{
                border:1px solid black;
            	margin: auto;
				width: 50px;
				height: 50px;
				font: normal 30px/50px "微软雅黑";
                margin-top: 100px;
			}
            #play{
              margin-top:20px;
            }
            h2{
            	color:red;
                margin-top:50px;
                display: none;
            }
			#showrank{
                margin:0 auto;
			}
			#rank{
				padding: 5px 0 5px 100px;
                text-align:left;
			}
			#rank img{
				vertical-align: middle;
				width: 50px;
				height: 50px;
			}
            #rank span{
                vertical-align: middle;
                margin-left: 10px;
            }
          
		</style>
	</head>
	<body>
		<div id="box">
			<div id="content"></div>
			<button id="play">颜值</button>
            <h2 id="title">颜值排行榜</h2>
			<div id="showrank">
               
				<!--<div id="rank">
					<img src="img" />
					<span>nickname</span>
					<span>score</span>
				</div>-->
			</div>
		</div>
	</body>
	<script src="js/zepto.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		var content = document.getElementById("content");
		var btn = document.getElementById("play");
		var openid = '<?php echo $userArr["openid"];?>';
		var nickname = '<?php echo $userArr["nickname"];?>';
		var img = '<?php echo $img;?>';
		btn.addEventListener("click",function(){
			$("#title").css('display','block'); 
			var num = String(Math.random()).substr(2,2);
			content.innerHTML = num;
			console.log("我的颜值是"+num);
			console.log(openid);
			$.ajax({
				type:"get",
				url:"server.php",
				data:{
					openid:openid,
					nickname:nickname,
					img:img,
					score:num
				},
				dataType:"json",
				success:function(data){
                    console.log(data);
                    $("#showrank").html("");
					for(var i=0;i<data.length;i++){
						var divObj =$('<div id="rank"><img src="'+
						data[i].img +
						'"/><span>'+
						data[i].nickname +
						'</span><span>'+
						data[i].score+
						'</span></div>');
						$("#showrank").append(divObj);
					}
				},
				error:function(errors){
					console.log(errors);
				}
			});
		},false);
	</script>
</html>
