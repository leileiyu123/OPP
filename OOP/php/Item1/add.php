<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="UTF-8" />
		<style type="text/css">
			.setWidth {
				width: 50%;
				display: inline-block;
			}
			
			.setP {
				margin: 0 auto;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css" />
	</head>

	<body>

		<div class="container" style="margin-top:60px ;">
			<div class="jumbotron" style=" text-align:center;background-color: white; ">
				<h1>添加图书</h1>
			</div>
		</div>
		<div class="container">
			<form action="add.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="names" name="names">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">现价:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="currentPrice">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">原价:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="oriPrice">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">数量:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="saleNum">
					</div>
				</div>
					<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">编号:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="No">
					</div>
				</div>
					<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">适合手机:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="fitPhone">
					</div>
				</div>
					<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">类型（手机壳）:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="type">
					</div>
				</div>
					<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">材料:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="material">
					</div>
				</div>
					<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">价格区间:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="priceFiled">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">品牌:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="brand">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">生产地方:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="infor" name="productPlace">
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">书籍图片:</label>
					<input type="file" id="pic" name="productImg">
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn">Sign in</button>
					</div>
				</div>

			</form>

		</div>
	</body>
	 
	<?php
					//链接数据库
				 
				$db	= mysql_connect("localhost","root","");
				mysql_select_db("item");
				mysql_query("set names utf8");
				//解决$_POST带来的bug
				 function _post($str){
					$val = !empty($_POST[$str]) ? $_POST[$str] : null;
					return $val;
				} 
				if (_post("names")!="" && _post("currentPrice")!=""  ) {
							var_dump(_post("names"));
							$names = _post("names");
//							echo $names;
							$productImg="img/"._post("productImg");
							echo $productImg;
							$currentPrice  = _post("currentPrice ");
							$oriPrice = _post("oriPrice");
							$saleNum = _post("saleNum");
							$No = _post("No");
							$fitPhone = _post("fitPhone");
							$type = _post("type");
							$material = _post("material");
							$priceFiled= _post("priceFiled");
							$brand = _post("	brand");
							$productPlace = _post("productPlace");
							
							
							
							
						   	$query="insert into cheap (productName,productImg,oriPrice,saleNum,currentPrice,NO,fitPhone,type,	material,priceFiled,brand,productPlace) values 
						   	('$names','$productImg','$oriPrice','$saleNum','$currentPrice','$NO','$fitPhone','$type','$material','$priceFiled','$brand','$productPlace')";
								$result=mysql_query($query);
								if (mysql_affected_rows() ) {
									$url="add.php"; 
									header( "Location: $url" ); 
								}	
				}							
?>

</html>