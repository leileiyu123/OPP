<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title>game_second</title>
		<style type="text/css">
		*,body {
			margin: 0;
			padding: 0;
		}
		#wrap {
			position: relative;
			text-align: center;
			overflow: hidden;
		}
		.bg2 {
			width: 100%;
			height: 100%;
		}
		.imgs{
			position: absolute;
			left: 0;
			top: 30px;
			width: 9999px;
			height: 300px;
		}
		.imgs>div{
			width: 360px;
			float: left;
		}
		.imgs>div>img{
			width: 150px;
			height: 300px;
			padding-left: 40px;
		}
		#choose {
			position: absolute;
			bottom: 150px;
			left: 10px;
		}
		
		#choose>div {
			float: left;
			margin-right: -40px;
		}
		
		#choose>div>img {
			width: 55%;
		}
		
		#btn {
			position: absolute;
			bottom: 80px;
		}
		
		#btn img {
			width: 50%;
		}
</style>
	</head>
	<body>
		<div id="wrap">
			<img class="bg2" src="img/小样++游戏页面/人物选择页/白客/大背景.png"/>
			<div class="imgs">
				<div><img class="person1" src="img/小样++游戏页面/人物选择页/白客/人物选择－白客.png" /></div>
				<div><img class="person2" src="img/小样++游戏页面/人物选择页/韩雪/人物选择－韩雪.png" /></div>
				<div><img class="person3" src="img/小样++游戏页面/人物选择页/明道/人物选择－明道.png" /></div>
				<div><img class="person4" src="img/小样++游戏页面/人物选择页/刘语熙/人物选择-刘语熙.png" /></div>
				<div><img class="person5" src="img/小样++游戏页面/人物选择页/徐开骋/人物选择-徐开骋.png" /></div>
			</div>
			<div id="choose">
				<div>
					<img src="img/小样++游戏页面/人物选择页/白客/头像－白客.png"/>
					<p style="color:red">白客</p>
				</div>
				<div>
					<img src="img/小样++游戏页面/人物选择页/白客/头像－韩雪.png"/>
					<p>韩雪</p>
				</div>
				<div>
					<img src="img/小样++游戏页面/人物选择页/白客/头像－明道.png"/>
					<p>明道</p>
				</div>
				<div>
					<img src="img/小样++游戏页面/人物选择页/白客/头像－刘语熙.png"/>
					<p>刘语熙</p>
				</div>
				<div>
					<img src="img/小样++游戏页面/人物选择页/白客/头像－徐开骋.png"/>
					<p>徐开骋</p>
				</div>
			</div>
			<div id="btn">
				<img src="img/小样++游戏页面/人物选择页/刘语熙/按钮－松开.png">
			</div>
		</div>

	</body>
	<script src="../../php/js/JQuery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(function($) {
			$("#choose>div").on("click", function() {
//				alert($(this).index());
				$(".imgs").animate({
					//涉及运算的时候不加"",不加px
					left: -$(this).index() * $(".imgs>div").width()
				})
			});
		});
	</script>
</html>