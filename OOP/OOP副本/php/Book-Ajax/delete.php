<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("books");
	mysql_query("set names utf8");
	
	$carId = 0;
	if(isset($_GET["carId"])){
		$carId = $_GET["carId"];
	}
	
	$query = "delete from car where carId=$carId";
	mysql_query($query);

////想要用ajax实现,但没写好
//	$carId = $_GET["bookId"];
//	$query = "delete from car where bookId=$bookId";
//	mysql_query($query);
//	
//	$query = "select * from car";
//	$result = mysql_query($query);
//	if(mysql_num_rows($result)>0){
//		while($row=mysql_fetch_assoc($result)){
//			$arr[]=$arr;
//		}
//		echo json_encode($arr);
//	}
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	
</body>
<script type="text/javascript">
	window.location.href = "http://localhost/OOP/php/Book-Ajax/car.php";
</script>
</html>