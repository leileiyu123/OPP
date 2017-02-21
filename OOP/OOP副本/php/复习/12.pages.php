<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("myfirstsql");
	mysql_query("set names utf8");
	define("PAGESIZE", 3);
	$page = 0;
	if(isset($_GET["page"])){
		$page = $_GET["page"];
	}
	
	$query = "select count(userId) from user";
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
//	var_dump($row);
	$count = $row[0];
	$pages = ceil($count/PAGESIZE);
//	echo $pages;

	$query = "select * from user limit ".$page*PAGESIZE.",".PAGESIZE;
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_assoc($result)){
?>
		<h1><?php echo $row["name"].$row["password"];?></h1>
<?php			
		}
	}
	
?>

<?php
	for($i=0;$i<$pages;$i++){
?>
	<a href="12.pages.php?page=<?php echo $i?>"><?php $num=$i+1;echo "第".$num."页"?></a>
<?php		
	}
?>