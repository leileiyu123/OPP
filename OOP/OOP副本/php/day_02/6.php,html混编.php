<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<table border="" cellspacing="" cellpadding="">
			<?php
				for($i=1;$i<=9;$i++){
			?>
				<tr>
					<?php 
						for($j=1;$j<=$i;$j++){
					?>
						<td><?php echo "$j*$i=".$j*$i; ?></td>
					<?php
						}
					?>
				</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>