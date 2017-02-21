<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Swiper demo</title>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->
			<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />

		<!-- Link Swiper's CSS -->
		<link rel="stylesheet" href="css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="css/page_01.css" />
		<link rel="stylesheet" type="text/css" href="css/page_02.css"/>
		<!-- Demo styles -->
		<style>
			*,
			body {
				padding: 0;
				margin: 0;
			}
			
			html,
			body {
				position: relative;
				width: 100%;
				height: 100%;
			}
			
			body {
				background: #eee;
				font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
				font-size: 14px;
				color: #000;
				margin: 0;
				padding: 0;
			}
			
			.swiper-container {
				width: 100%;
				height: 100%;
			}
			
			.swiper-slide {
				text-align: center;
				font-size: 18px;
				background: #fff;
				/* Center slide text vertically */
				display: -webkit-box;
				display: -ms-flexbox;
				display: -webkit-flex;
				display: flex;
				-webkit-box-pack: center;
				-ms-flex-pack: center;
				-webkit-justify-content: center;
				justify-content: center;
				-webkit-box-align: center;
				-ms-flex-align: center;
				-webkit-align-items: center;
				align-items: center;
			}
			
			.showPeople{
				width: 30%;
				position: absolute;
				left: 5px;
				right: 0;
				top: 30px;
				margin: auto;
			}
		</style>
	</head>

	<body>
		<!-- Swiper -->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<!--页面1-->
				<div class="swiper-slide">
					<div id="box">
						<img class="bg" src="img/小样++游戏页面/修改/封面.png" />
						<div id="enter">
							<img class="btn" src="img/小样++游戏页面/修改/按钮.png" />
						</div>
					</div>
				</div>
				<!--页面2-->
				<div class="swiper-slide">
					<div id="wrap">
						<img class="bg2" src="img/小样++游戏页面/人物选择页/白客/大背景.png" />
						<div class="imgs">
							<div><img class="person1" src="img/小样++游戏页面/人物选择页/白客/人物选择－白客.png" /></div>
							<div><img class="person2" src="img/小样++游戏页面/人物选择页/韩雪/人物选择－韩雪.png" /></div>
							<div><img class="person3" src="img/小样++游戏页面/人物选择页/明道/人物选择－明道.png" /></div>
							<div><img class="person4" src="img/小样++游戏页面/人物选择页/刘语熙/人物选择-刘语熙.png" /></div>
							<div><img class="person5" src="img/小样++游戏页面/人物选择页/徐开骋/人物选择-徐开骋.png" /></div>
						</div>
						
						<div id="choose">
							<div class="intro">
								<img src="img/小样++游戏页面/人物选择页/韩雪/头像－白客.png" />
								<img src="img/people/1.png"/>
								<p>白客</p>
							</div>
							<div>
								<img src="img/小样++游戏页面/人物选择页/白客/头像－韩雪.png" />
								<img src="img/people/2.png"/>
								<p>韩雪</p>
							</div>
							<div>
								<img src="img/小样++游戏页面/人物选择页/白客/头像－明道.png" />
								<img src="img/people/3.png"/>
								<p>明道</p>
							</div>
							<div>
								<img src="img/小样++游戏页面/人物选择页/白客/头像－刘语熙.png" />
								<img src="img/people/4.png"/>
								<p>刘语熙</p>
							</div>
							<div>
								<img src="img/小样++游戏页面/人物选择页/白客/头像－徐开骋.png" />
								<img src="img/people/5.png"/>
								<p>徐开骋</p>
							</div>
						</div>
						<input id="ipt" type="hidden" />
						<div id="btn">
							<img class="btn" src="img/小样++游戏页面/人物选择页/刘语熙/按钮－松开.png">
						</div>
					</div>
				</div>
				<!--页面3-->
				<div class="swiper-slide">
					<img class="showPeople" src=""/>
					<canvas id="myCanvas"></canvas>
				</div>
				
				<div class="swiper-slide">Slide 4</div>

			</div>
			<!-- Add Pagination -->
			<!--<div class="swiper-pagination"></div>-->
		</div>

		<!-- Swiper JS -->
		<script src="js/swiper.min.js"></script>

		<!-- Initialize Swiper -->
		<script>
			var swiper = new Swiper('.swiper-container', {
				pagination: '.swiper-pagination',
				paginationClickable: true,
				nextButton: '.btn'
			});
		</script>
	</body>
	<script src="js/JQuery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/page_02.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		//获取设备宽高，并且在移动端需要配合meta才能有效
		var width = document.documentElement.clientWidth;
		var height = document.documentElement.clientHeight;
		var canvas = document.getElementById('myCanvas');
		var context = canvas.getContext('2d');
		var deg = Math.PI / 180;
		var divs = document.getElementById('btn');
		//将canvas大小设置成全屏
		canvas.width = width;
		canvas.height = height;
		var scaleX = canvas.width/640;
		var scaleY = canvas.height/1136;
		
		function loading(imgArr,fn){
			var length = 0;
			for(var keys in imgArr){
				length++;
			}
			var num = 0;
			var imgObj = {};
			for(var keys in imgArr){
				var img = new Image();
				img.src = imgArr[keys];
				img.onload = (function(key){
					return function(){
						num++;
						imgObj[key] = this;
						var sum = num/length;
						if(fn.progress){
							fn.progress(sum);
						}
						if(num>=length){
							if(fn.complete){
								fn.complete(imgObj);
							}
						}
					}
				})(keys)
			}	
		}
		
		loading({
			"bg":"img/image/背景.png",
			"len":"img/image/len.png",
			"matong":"img/image/matong.png",
			"yun1":"img/image/云1.png",
			"yun2":"img/image/云2.png",
			"dan1":"img/image/dan1.png",
			"qtang":"img/image/qtang.png"
		},{
			complete:main
		})
		
		function main(imgObj){
			console.log("haha");
			
			
			
			
			function ani(){
				context.clearRect(0,0,canvas.width,canvas.height);
				context.drawImage(imgObj.bg,0,0,canvas.width,canvas.height);
				window.requestAnimationFrame(ani);
			}
			ani();
		}
		
	</script>

</html>