<?php
	$db = mysql_connect("localhost","root","");
	
	if($db){
		mysql_select_db("myfirstsql");
		$query = "select * from user";
		$result = mysql_query($query);
		
?>
	<table border="" cellspacing="" cellpadding="">
		<?php
			while($row=mysql_fetch_assoc($result)){
		?>
			<tr>
				<td><?php echo $row["userId"];?></td>
				<td><?php echo $row["name"];?></td>
				<td><?php echo $row["password"];?></td>
			</tr>
		<?php		
			}
		?>
	</table>
<?php		
		
	}

?>