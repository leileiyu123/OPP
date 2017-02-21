
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>网上书城</title>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			.box2{
				width: 100%;
				height: 100%;
			}
			#head{
				width: 100%;
				height: 50px;
				background-color: black;
				padding-left: 20%;
				position: fixed;
				top: 0;
				left: 0;
			}
			#head>a{
				text-decoration: none;
				color: darkgrey;
				font: normal 16px/50px "微软雅黑";
				margin-right: 20px;
			}
			#head>a:hover{
				color: white;
			}
			.user{
				color: red;
				margin-left: 300px;
			}
			#center{
				width:80%;
				/*background: paleturquoise;*/
				margin-top: 100px;
				padding:0 10%;
			}
			.center1{
				width: 80%;
				/*border: 1px solid red;*/
				margin: auto;
			}
			.left{
				width: 70%;
				background: gainsboro;
				border-radius: 10px;
				display: inline-block;
			}
			.left>h1{
				font-size: 60px;
				padding-top: 60px;
				padding-bottom: 15px;
			}
			.left>img{
				width: 85%;
				padding-top: 15px;
			}
			.right{
				width: 25%;
				/*background: red;*/
				display: inline-block;
				vertical-align: top;
				padding-left: 50px;
			}
			.right>h1{
				font-size: 40px;
				padding-top: 30px;
				padding-bottom: 10px;
			}
			.right>form>p>input{
				outline: none;
				width: 200px;
				height: 35px;
				border-radius:5px;
				border: 1px solid darkgray;
				margin-top: 15px;
			}
			.right>form>div{
				margin-top: 10px;
				color: darkgray;
				font-size: 12px;
			}
			.right>form>button{
				outline: none;
				margin-top: 20px;
				padding: 8px;
				background-color: white;
				border-radius: 5px;
				font-size: 16px;
				margin-left: 30px;
				border: 1px solid darkgray;
			}
			.right>form>a{
				margin-top: 20px;
				padding: 8px;
				background-color: white;
				border-radius: 5px;
				font-size: 16px;
				color: black;
				margin-left: 30px;
				border: 1px solid darkgray;
				display: inline-block;
				text-decoration: none;
			}
			.center2{
				width: 80%;
				margin: auto;
				/*border: 1px solid black;*/
				margin-top: 30px;
			}
			.book{
				width: 30%;
				height: 520px;
				border: 1px solid darkgray;
				display: inline-block;
				vertical-align: top;
				margin-top: 20px;
				margin-right: 22px;
				border-radius: 5px;
			}
			.img>img{
				width: 80%;
				height: 380px;
				padding-left: 30px;
			}
			.intro{
				margin-left: 10px;
				font-size: 25px;
				padding: 30px;
				overflow: hidden;
				text-overflow: ellipsis;
				white-space: nowrap;
			}
			.price>span{
				margin-left: 35px;
			}
			.price>a{
				margin-left: 180px;
				padding: 8px;
				color: white;
				background-color: green;
				border-radius: 5px;
				text-decoration: none;
				
			}
			.pagess{
				padding:30px 45%;
			}
			.pagess>a{
				text-align: center;
				font:normal 18px/30px "微软雅黑";
				text-decoration: none;
				display: inline-block;
				width: 30px;
				height: 30px;
				border: 1px solid darkgray;
				margin-left: -4px;
			}
			.pagess>a:hover{
				background-color: dodgerblue;
				color: white;
			}
			#bottom{
				width: 100%;
				margin-top: 60px;
				border-top:1px solid gainsboro;
				text-align: center;
			}
			#bottom>p:nth-child(1){
				color:#3B8FC7;
				font-size: 14px;
				padding: 15px;
			}
			#bottom>p:nth-child(2){
				color: gainsboro;
				font-size: 14px;
			}
		</style>
	</head>
	<body>
		<div class="box2">
			<div id="head">
				<a href="">书吧</a>
				<a href="book.php" style="color: white;">网站首页</a>
				<a href="">关于我们</a>
				<a href="showBook.php">图书展示</a>
				<a href="">联系我们</a>
				<a href="car.php">购物车</a>
				<a href="addBook.html">添加图书</a>
				<span class="user">
				<?php 
					$user = "";
					if(isset($_GET["user"])){
						$user = $_GET["user"];
					}
					//在session_start()之前如果有输出内容，会出错，
					//解决办法：在session_start()之前加上ob_start();
					ob_start();

					echo $user;
				?>
				</span>
			</div>
			<div id="center">
				<div class="center1">
					<div class="left">
						<h1>我的书城</h1>
						<p style="font-size: 20px;">这里拥有世界各地的书籍，只有你想不到，没有我们这里没有的图书。</p>
						<img src="../img/1.jpg"/>
					</div>
					<div class="right">
						<h1>快速登录</h1>
						<?php
							$db = mysql_connect("localhost","root","");
							mysql_select_db("myfirstsql");
							mysql_query("set names utf8");
							
							
							session_start();
			
							$userId = "";
							if(isset($_SESSION["userId"])){
								$userId = $_SESSION["userId"];
							}
							$query = "select * from user where userId=$userId";
							$result = mysql_query($query);
							$name = "";
							$pass = "";
							if($result){
								$row = mysql_fetch_assoc($result);
								$name = $row["name"];
								$pass = $row["password"];
							}
							
						?>
						<form action="login.php" method="post" enctype="multipart/form-data">
							<p><input type="text" name="username" id="username" value="<?php echo $name;?>" placeholder="用户名"/></p>
							<p><input type="password" name="password" id="password" value="<?php echo $pass;?>" placeholder="密码"/></p>
							<div><input type="checkbox" name="check" id="check"/>七天免登陆</div>
							<button>登录</button>
							<!--<a href="login.php">登录</a>-->
							<a href="register_form.php">注册</a>
							<!--<button>注册</button>-->
							
						</form>
					</div>
				</div>
				<div class="center2">
				
				</div>
				<?php
					$db = mysql_connect("localhost","root","");
					mysql_select_db("books");
					mysql_query("set names utf8");
					define("PAGESIZE", 6);
					
					$query = "select count(bookId) from books";
					$result = mysql_query($query);
					$row = mysql_fetch_row($result);
					$count = $row[0];
					$pages = ceil($count/PAGESIZE);
				?>
				<div class="pagess">
					<?php
						for($i=0;$i<$pages;$i++){
					?>
						<a onclick="showPic(<?php echo $i;?>)"><?php $num=$i+1; echo $num;?></a>
					<?php	
					}
				?>
				</div>	
			</div>
			<div id="bottom">
				<p>免费条款 隐私保护 咨询热点 联系我们 公司简介 批发方案 配送方式</p>
				<p>@2016-2999 SSS版权所有，并保留所有权利</p>
			</div>
		</div>

	</body>
	<script src="../js/JQuery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$.ajax({
			type:"get",
			url:"book_server.php",
			data:{
				page:0  
			},
			success:function(data){
				$(".center2").html("");
				console.log(data);
				var arr = JSON.parse(data);
				console.log(arr);
				for(var i=0;i<arr.length;i++){
					
					var book = $("<div class='book'></div>");
					$(".center2").append(book);
					var img = $("<div class='img'></div>");
					$(book).append(img);
					var imgs = $("<img src='"+arr[i].img+"'/>");
					$(img).append(imgs);
					var intro = $("<div class='intro'>"+arr[i].intro+"</div>");
					$(book).append(intro);
					var price = $("<div class='price'></div>");
					$(book).append(price);
					var span = $("<span>"+"￥"+arr[i].price+"</span>");
					$(price).append(span);
					var a= $("<a href='showBook.php?bookId="+arr[i].bookId+"'>"+'立即购买'+"</a>");
					$(price).append(a);
					
				}
				
			},
			error:function(errors){
				console.log("失败");
				console.log(errors);
			}
		});
	 	function showPic(pages){
			$.ajax({
			type:"get",
			url:"book_server.php",
			data:{
				page:pages  
			},
			success:function(data){
				$(".center2").html("");
//				console.log(data);
				var arr = JSON.parse(data);
//				consol.log(arr);
				for(var i=0;i<arr.length;i++){
					var book = $("<div class='book'></div>");
					$(".center2").append(book);
					var img = $("<div class='img'></div>");
					$(book).append(img);
					var imgs = $("<img src='"+arr[i].img+"'/>");
					$(img).append(imgs);
					var intro = $("<div class='intro'>"+arr[i].intro+"</div>");
					$(book).append(intro);
					var price = $("<div class='price'></div>");
					$(book).append(price);
					var span = $("<span>"+"￥"+arr[i].price+"</span>");
					$(price).append(span);
					var a= $("<a href='showBook.php?bookId="+arr[i].bookId+"'>"+'立即购买'+"</a>");
					$(price).append(a);
					
				}
				
			},
			error:function(errors){
				console.log("失败");
				console.log(errors);
			}
		});
		}
	
	</script>
</html>