<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>login.php</title>
</head>
<body>	
</body>

<?php
	include_once "common.php";
	
	$email = "";
	if(isset($_POST["email"])){
		$email = $_POST["email"];
	}
	$pwd = "";
	if(isset($_POST["pwd"])){
		$pwd = $_POST["pwd"];
	}
	
	session_start();
	
	$query = "select * from user where email='$email' and pwd='$pwd'";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result)==1){
		$row = mysql_fetch_assoc($result);
		$_SESSION["userId"] = $row["userId"];
		setcookie("email",$email);
		setcookie("pwd",$pwd); 
?>
<script type="text/javascript">
	window.location.href="http://localhost/OOP/php/Item/php/index.php?user=<?php echo $row['email']?>";
</script>
<?php
}else{
?>
<script type="text/javascript">
	window.location.href="http://localhost/OOP/php/Item/php/login.php?isFail=<?php echo "用户名或密码不正确，请重新登录!!!"?>";
</script>
<?php
}
?>
</html>