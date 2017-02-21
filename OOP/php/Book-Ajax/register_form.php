<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>register</title>
		<style type="text/css">
			
			#center{
				width: 100%;
				/*background-color: pink;*/
				margin-top: 80px;
				position: relative;
			}
			.title{
				font-size: 50px;
				padding-left:45%;
			}
			.inf{
				width: 600px;
				text-align: right;
				/*background-color: yellow;*/
				padding-left: 33%;
				padding-right:40% ;
			}
			.inf>form>input{
				outline: none;
				width: 500px;
				height: 30px;
				border-radius:5px;
				border: 1px solid darkgray;
				margin-bottom: 15px;
			}
			#ipt1{
				padding-right: 38%;
			}
			#ipt1>input{
				width: 85px;
				height: 35px;
				outline: none;
				font-size: 18px;
				border-radius:5px;
				border: 1px solid transparent;
			}
			#fail{
				color: red;
				text-align: center;
				font-size: 20px;
			}
			#spans{
				color: red;
				font: normal 16px/30px "微软雅黑";
				position: absolute;
				right: 700px;
				
			}
			
		</style>
	</head>
	<body>
		<div class="box">
				<p class="title">用户注册</p>
				<div class="inf">
					<form action="register.php" method="post" enctype="multipart/form-data">
						用户名：<input type="text" name="username" id="username" onblur="hei(this)" /><span id="spans"></span><br/>
						密码：<input type="text" name="password" id="password"/><br/>
						确认密码：<input type="text" name="password1" id="password1"/><br/>
						手机：<input type="text" name="phone" id="phone" /><br/>
						邮箱：<input type="text" name="email"  id="email"/><br/>
						<p id="ipt1"><input type="submit" id="sub" value="立即注册"></p>
					</form>
				</div>
				<p id="fail">
				<?php 
					$isFail = "";
					if(isset($_GET["isFail"])){
						$isFail = $_GET["isFail"];
					}
					echo $isFail;
				?>
				</p>
			</div>
			
	</body>
	<script src="../js/JQuery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		var names = document.getElementById("username");
		var pass = document.getElementById("password");
		var spans = document.getElementById("spans");
		function hei(obj){
			$.ajax({
				type:"post",
				url:"ajax_register.php",
				data:{
					name:obj.value
				},
	//			dataType:"json",
				success:function(data){
					//用于从一个字符串中解析出json对象
					var obj = JSON.parse(data);
					console.log("成功");
					console.log(data);
					console.log(obj);
					if(obj.errcode == 1){
						spans.style.color = "red";
					}else if(obj.errcode==0){
						spans.style.color = "blue";
					}
					spans.innerHTML = obj.msg;
				},
				erorr:function(errors){
					console.log("失败");
				}
			});
		}
		
	</script>
</html>

