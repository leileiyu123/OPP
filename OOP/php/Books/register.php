
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	
</body>
<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("myfirstsql");
	mysql_query("set names utf8");
	
	$name = "";
	if(isset($_POST["username"])){
		$name = $_POST["username"];
	}
	$pass = "";
	if(isset($_POST["password"])){
		$pass = $_POST["password"];
	}
	$pass1 = "";
	if(isset($_POST["password1"])){
		$pass1= $_POST["password1"];
	}
	$phone = "";
	if(isset($_POST["phone"])){
		$phone = $_POST["phone"];
	}
	$email = "";
	if(isset($_POST["email"])){
		$email = $_POST["email"];
	}
	if($pass==$pass1 && $pass!="" && $pass1!="" ){
		$query = "insert into user (name,password,password1,phone,email) values ('$name','$pass','$pass1','$phone','$email')";
		mysql_query($query);
	?>
	<script type="text/javascript">
		window.location.href = "http://localhost/OOP/php/Books/book.php";
	</script>
	<?php
	}else{
	?>
	<script type="text/javascript">
		window.location.href = "http://localhost/OOP/php/Books/register_form.php?isFail=<?php echo "注册失败，请重新注册!!!"?>";
	</script>	
	<?php
	}
	
?>

</html>