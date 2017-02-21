<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	
</body>
<?php
  include_once "common.php";
  session_start();
  
  $userId="";
  if(isset($_SESSION["userId"])){
  	$userId=$_SESSION["userId"];
  }
  
  $name = "";
	if(isset($_POST["name"])){
		$name = $_POST["name"];
	}
	$sell = "";
	if(isset($_POST["sell"])){
		$sell = $_POST["sell"];
	}
	$street = "";
	if(isset($_POST["street"])){
		$street = $_POST["street"];
	}
	$phone = "";
	if(isset($_POST["phone"])){
		$phone = $_POST["phone"];
	}
	
	if($name!="" && $sell!="" && $street!="" && $phone!=""){
		$query = "insert into user (name,sell,street,phone) values ('$name','$sell','$street','$phone') where userId=$userId";
		mysql_query($query);
	?>
	<script type="text/javascript">
		window.location.href = "http://localhost/OOP/php/Item/php/index.php";
	</script>
	<?php
	}else{
	?>
	<script type="text/javascript">
		window.location.href = "http://localhost/OOP/php/Item/php/orderInfo.html";
	</script>	
	<?php
	}
	?>
</html>