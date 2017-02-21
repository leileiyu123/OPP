<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("books");
	mysql_query("set names utf8");
	
	$price = "";
	if(isset($_POST["price"])){
		$price = $_POST["price"];
	}
	$img = "";
	if(!file_exists("../img")){
		if(!mkdir("../img")){
			echo "上传失败";
			return;
		}
	}
	move_uploaded_file($_FILES["img"]["tmp_name"], "../img/".$_FILES["img"]["name"]);
	$img = "../img/".$_FILES["img"]["name"];
	echo $img;
	$intro = "";
	if(isset($_POST["intro"])){
		$intro = $_POST["intro"];
	}
	$name = "";
	if(isset($_POST["name"])){
		$name = $_POST["name"];
	}
	$writer = "";
	if(isset($_POST["writer"])){
		$writer = $_POST["writer"];
	}
	$publish = "";
	if(isset($_POST["publish"])){
		$publish = $_POST["publish"];
	}
	$time  = "";
	if(isset($_POST["time"])){
		$time = $_POST["time"];
	}
	$isbn  = "";
	if(isset($_POST["isbn"])){
		$isbn = $_POST["isbn"];
	}
	
	$query = "insert into books (price,img,intro,name,writer,publish,time,isbn) values ('$price','$img','$intro','$name','$writer','$publish','$time','$isbn')";
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
	window.location.href = "http://localhost/OOP/php/Books/book.php";
</script>
</html>