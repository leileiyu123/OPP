<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>99乘法表</title>
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
						<td><?php echo "$j*$i=".$i*$j;?></td>
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
