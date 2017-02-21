<?php
	$name = "";
	if(isset($_COOKIE["username"])){
		$name = $_COOKIE["username"];
	}
	$pass = "";
	if(isset($_COOKIE["password"])){
		$pass = $_COOKIE["password"];
	} 

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="3.login.php" method="post">
		<input type="text" name="username" id="username" value="<?php echo $name;?>" />
		<input type="password" name="password" id="password" value="<?php echo $pass;?>" />
		<input type="submit" value="提交"/>
	</form>
</body>
</html>