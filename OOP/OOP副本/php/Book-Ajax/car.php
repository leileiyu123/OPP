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
					include_once("common.php");
					
					$bookId = 0;
					if(isset($_GET["bookId"])){
						$bookId = $_GET["bookId"];
					}

					$str = "";
					$query = "select * from books where bookId=$bookId";
					$result = mysql_query($query);
						
					if(mysql_num_rows($result)>0){
						while($row = mysql_fetch_assoc($result)){
	//						var_dump($row);
							$arr[] = $row;
						}
						$str = json_encode($arr);
	//					echo $str;
					}
					$arr = json_decode($str,true);
	//				echo "<hr>";
//					var_dump($arr);
	//				echo "<hr>";
	
					$query = "select * from car where bookId=$bookId";
					$result = mysql_query($query);
					if(mysql_num_rows($result)>0){
						$query = "update car set number = number+1 where bookId=$bookId";
						mysql_query($query);
					}else{
						if($arr!=""){
							foreach ($arr as $key => $value) {
								$str = "insert into car (";
								$valuestr = "";
								foreach ($value as $keys => $values) {
									$str .= $keys.",";
									$valuestr .= "'".$values."'".",";
								}
								
								//把字符串最后一位字符 ","截取掉
								$str = substr($str, 0,-1);
								$valuestr = substr($valuestr, 0,-1);
								
								$str .= ") values ("; 
								$str .= $valuestr.")";
//								echo $str;
//								echo "<hr>";
//								echo $valuestr;
								mysql_query($str);
							}
						}
					}
			
				?>
				<h1>购物车</h1>
				<div class="carWrap">
					<table border="" cellspacing="0" cellpadding="0" id="tab">
						<tr id="header">
							<td>图书</td>
							<td>书名</td>
							<td>数量</td>
							<td>单价</td>
							<td>结算</td>
							<td>删除</td>
						</tr>
						
						<?php
							include_once("common.php");
							
							$query = "select * from car";
							$result = mysql_query($query);
							if(mysql_num_rows($result)>0){
								while($row = mysql_fetch_assoc($result)){
							?>
								<tr id="data">
									<td><img src="<?php echo $row["img"];?>"></td>
									<td><?echo $row["name"];?></td>
									<td><?echo $row["number"];?></td>
									<td><?echo $row["price"];?></td>
									<td><a href="" >付款</a></td>
									<td><a href="delete.php?carId=<?php echo $row["carId"];?>" onclick="delet('tab',this)">删除</a></td>
									<!--<td><a onclick="delet(<?php echo $row["carId"];?>,'tab',this)">删除</a></td>-->
								</tr>
							<?php		
								}
							}
							
							
						?>
						
					</table>
				</div>

				
			</div>
			<div id="bottom">
				<p>免费条款 隐私保护 咨询热点 联系我们 公司简介 批发方案 配送方式</p>
				<p>@2016-2999 SSS版权所有，并保留所有权利</p>
			</div>
		</div>

	</body>
	<script type="text/javascript">
		function delet(carId,id,obj){
//			$.ajax({
//				type:"get",
//				url:"delete.php",
//				data:{
//					carId:carId
//				},
//				success:function(data){
//					console.log("成功");
//					console.log(data);
//					var arr = JSON.parse(data);
////					for(var i=0;i<arr.length;i++){
////						var tr = $("<tr id='data'><td><img src = '"+
////						arr[i].img+"'></td><td>"+
////						arr[i].name+"</td><td>"
////						+1+"</td><td>"+
////						arr[i].price+"</td><td><a href=''>"+
////						付款+"</a></td><td><a onclick='delete("arr[i].carId,tab,this")'>"+删除+"</a></td></tr>");
////						$(#tab).append(tr);
////					}
//					for(var i=0;i<arr.length;i++){
//						var tr = $('<tr id="data"><td><img src = "'+
//						arr[i].img+'"></td><td>'+
//						arr[i].name+'</td><td>'+
//						arr[i].number+'</td><td>'+
//						arr[i].price+'</td><td><a href="">'+
//						付款+'</a></td><td><a onclick="delete('arr[i].carId,tab,this")">'+删除+'</a></td></tr>');
//						$(#tab).append(tr);
//					}
//				},
//				error:function(errors){
//					console.log("失败");
//					console.log(errors);
//				}
//			});
			alert("你确定要删除嘛");
			//获取被删行的索引
			var rowIndex = obj.parentElement.rowIndex;
			console.log(rowIndex);
			document.getElementById(id).deleteRow(rowIndex);
		}
	</script>
</html>
