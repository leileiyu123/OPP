<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>login</title>
</head>
<body>
	
</body>

<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("myfirstsql");
	mysql_query("set names utf8");
	
//	var_dump($_POST);
	$name = "";
	if(isset($_POST["username"])){
		$name = $_POST["username"];
	}
	$pass = "";
	if(isset($_POST["password"])){
		$pass = $_POST["password"];
	}
	
	session_start();
	
	$query = "select * from user where name='$name' and password='$pass'";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result)==1){
		$row = mysql_fetch_assoc($result);
		$_SESSION["userId"] = $row["userId"];
		if(isset($_POST["check"])){
			setcookie("username",$name,time()+3600*24*7);
			setcookie("password",$pass,time()+3600*24*7);
		}else{
			setcookie("username",$name);
			setcookie("password",$pass);
		}
		
	?>
	<script type="text/javascript">
		window.location.href = "http://localhost/OOP/php/Books/book.php?user=<?php echo "欢迎您,".$row['name']?>";
	</script>
	<?php
	}else{
	?>
	<script type="text/javascript">
		window.location.href = "http://localhost/OOP/php/Books/book.php?user=<?php echo "请重新登录"?>";
	</script>
	<?php
		
	}
?>
	

</html>