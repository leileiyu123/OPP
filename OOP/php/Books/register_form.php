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
			
		</style>
	</head>
	<body>
		<div class="box">
				<p class="title">用户注册</p>
				<div class="inf">
					<form action="register.php" method="post" enctype="multipart/form-data">
						用户名：<input type="text" name="username"  /><br/>
						密码：<input type="text" name="password" /><br/>
						确认密码：<input type="text" name="password1" /><br/>
						手机：<input type="text" name="phone"  /><br/>
						邮箱：<input type="text" name="email"  /><br/>
						<p id="ipt1"><input type="submit" value="立即注册"></p>
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
</html>

