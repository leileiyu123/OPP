<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>car</title>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			.box6{
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
				width: 100%;
				margin-top: 150px;
				/*border: 1px solid black;*/
			}
			.center>h1{
				text-align: center;
				font-size: 50px;
			}
			.carWrap{
				width: 80%;
				margin: 20px auto;
				border: 3px solid #EFEAE5;
			}
			table{
				width: 90%;
				margin: 0 auto;
				margin-top: 30px;
				margin-bottom: 30px;
			}
			#header>td{
				text-align: center;
				padding: 10px 0;
			}
			#header>td:nth-child(1){
				width: 30%;
			}
			#header>td:nth-child(2),#header>td:nth-child(3),#header>td:nth-child(4),#header>td:nth-child(5),#header>td:nth-child(6){
				width: 14%;
			}
			#data>td{
				text-align: center;
			}
			#data>td>img{
				width: 20%;
			}
			#data>td>a{
				text-decoration: none;
				color: black;
			}
			#bottom{
				width: 100%;
				margin-top: 100px;
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
		<div class="box6">
			<div id="head">
				<a href="">书吧</a>
				<a href="book.php">网站首页</a>
				<a href="">关于我们</a>
				<a href="showBook.php" >图书展示</a>
				<a href="">联系我们</a>
				<a href="car.php" style="color: white;">购物车</a>
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
				<h1>购物车</h1>
				<div class="carWrap">
					<table border="" cellspacing="0" cellpadding="0">
						<tr id="header">
							<td>图书</td>
							<td>书名</td>
							<td>数量</td>
							<td>单价</td>
							<td>结算</td>
							<td>删除</td>
						</tr>
						<tr id="data">
							<td><img src="<?php echo $row["img"];?>"></td>
							<td><?echo $row["name"];?></td>
							<td></td>
							<td><?echo $row["price"];?></td>
							<td><a href="" >付款</a></td>
							<td><a href="delete.php?bookId=<?php echo $row["bookId"];?>" >删除</a></td>
						</tr>
					</table>
				</div>

				
			</div>
			<div id="bottom">
				<p>免费条款 隐私保护 咨询热点 联系我们 公司简介 批发方案 配送方式</p>
				<p>@2016-2999 SSS版权所有，并保留所有权利</p>
			</div>
		</div>

	</body>
</html>
