<?php
	//1.与mysql建立连接
	$db = mysql_connect("localhost","root","");
	
	if($db){
		//2.选择要操作的数据库(连接数据库)
		mysql_select_db("myfirstsql");
		//3.对数据库进行增删改查等操作
		$query = "select * from user ";
		$result = mysql_query($query);
		
//		$row = mysql_fetch_row($result);
//		var_dump($row);
		
//		$row = mysql_fetch_array($result);
//		var_dump($row);
		
//		$row = mysql_fetch_object($result);
//		var_dump($row);
//		echo $row->name;

?>

	<table border="" cellspacing="" cellpadding="">
		<?php
			while($row = mysql_fetch_assoc($result)){
		?>
			<tr>
				<td><?php echo $row["userId"]?></td>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["password"]?></td>
			</tr>
		<?php	
			}
		?>
	</table>		
<?php		
	}

?>