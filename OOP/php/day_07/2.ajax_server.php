<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("myfirstsql");
	mysql_query("set names utf8");
//	$id = $_GET["id"];

	$query = "select * from user";
	$result = mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_assoc($result)){
			$arr[]=$row;
		}
		echo json_encode($arr);//json把关联数组解析为对象 把索引数组解析为数组
	}
	
	
//	var_dump($_GET);
//	$name = $_GET["name"];
//	echo '{"name":"'.$name.'"}';

//	$arr["name"] = $name;
//	$arr["password"] = "123";
//	$json = json_encode($arr);
//	echo $json;

//<p class="wrap">lele</p>
	
?>
