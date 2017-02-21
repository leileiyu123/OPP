<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("books");
	mysql_query("set names utf8");
	
	$bookId = 0;
	if(isset($_GET["bookId"])){
		$bookId = $_GET["bookId"];
	}
	
	$query = "delete from books where bookId=$bookId";
	mysql_query($query);
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
	window.location.href = "http://localhost/OOP/php/Books/car.php";
</script>
</html>