<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<table border="" cellspacing="" cellpadding="">
			<?php
				for($i=1;$i<=9;$i++){//$i代表第几行
			?>
				<tr>
					<?php 
						for($j=1;$j<=9;$j++){//$j代表第几列
							
					?>
						<td>
							<?php 
								if($j<=$i){
									echo "$j*$i=".$j*$i; 
								}
							?></td>
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