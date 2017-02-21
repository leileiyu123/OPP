<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>showBook</title>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			.box4{
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
			.center{
				width: 80%;
				margin-top: 100px;
				padding-left: 350px;
				/*border: 1px solid black;*/
			}
			.showImg{
				width: 38%;
				/*border: 1px solid red;*/
				display: inline-block;
			}
			.showImg>img{
				width: 90%;
			}
			.showInfo{
				width: 40%;
				/*border: 1px solid black;*/
				display: inline-block;
				vertical-align: top;
				margin-left: 50px;
			}
			.bname{
				width: 100%;
				height: 50px;
				/*background-color: pink;*/
				font: normal 40px/50px "微软雅黑";
				/*text-align: center;*/
			}
			.bintro{
				width: 100%;
				padding: 30px 0;
				font-size: 20px;
				color: gray;
				/*background-color: burlywood;*/
				text-indent: 2em;
				border-bottom: 1px solid gainsboro;
				border-radius: 5px;
			}
			.showInfo>div{
				width: 100%;
				/*background-color: gainsboro;*/
				margin-top: 30px;
			}
			.showInfo>div>p{
				width: 100%;
				margin-bottom: 20px;
				color:#616161;
			}
			.p1>span,.p2>span{
				color: #3B86BF;
			}
			.p3>span{
				color: red;
				font-size: 40px;
			}
			.showInfo>a{
				text-align: center;
				font:normal 18px/40px "微软雅黑";
				text-decoration: none;
				display: inline-block;
				width: 100px;
				height: 40px;
				border: 1px solid red;
				border-radius: 5px;
				margin-right: 200px;
				margin-top: 50px;
			}
			.car{
				background-color: red;
				color: white;
			}
			.buy{
				background-color: #FEEDEE;
				color: red;
			}
		</style>
	</head>
	<body>
		<div class="box4">
			<div id="head">
				<a href="">书吧</a>
				<a href="book.php">网站首页</a>
				<a href="">关于我们</a>
				<a href="showBook.php" style="color: white;">图书展示</a>
				<a href="">联系我们</a>
				<a href="car.php">购物车</a>
				<a href="addBook.html">添加图书</a>
			</div>
			<div class="center">
				<?php
					$db = mysql_connect("localhost","root","");
					mysql_select_db("books");
					mysql_query("set names utf8");
					$bookId = 0;
					if(isset($_GET["bookId"])){
						$bookId = $_GET["bookId"];
					}
					
					$query = "select * from books where bookId=$bookId";
					$result = mysql_query($query);
					$row = mysql_fetch_assoc($result);
//					var_dump($row);
				?>
				<div class="showImg">
					<img src="<?php echo $row["img"];?>" />
				</div>
				<div class="showInfo">
					<p class="bname"><?php echo $row["name"];?></p>
					<p class="bintro"><?php echo $row["intro"];?></p>
					<div>
						<p class="p1">作者：<span><?php echo $row["writer"];?></span></p>
						<p class="p2">出版社：<span><?php echo $row["publish"];?></span></p>
						<p>出版时间：<?php echo $row["time"];?></p>
						<p>国际标准书号ISBN：<?php echo $row["isbn"];?></p>
						<p class="p3">友情价格：<span><?php echo "￥".$row["price"];?></span></p>
						
					</div>
					<a class="car" href="car.php?bookId=<?php echo $row["bookId"]?>">加入购物车</a>
					<a class="buy" href="">立即购买</a>
				</div>
				
			</div>
		</div>

	</body>
</html>
