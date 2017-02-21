
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
			#box{
				text-align: center;
			}
			.bg{
				width: 100%;
				height: 100%;
                position: relative;
			}
            #enter{
            		position: absolute;
            		bottom: 100px;
            }
			#enter img{
                width:50%;
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
		enter.addEventListener("click",function(){
			window.location.href="http://localhost/OOP/vchat/Game/2.game_second.php";
		},false);
	</script>
</html>