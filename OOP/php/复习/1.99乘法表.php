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
						for($j=1;$j<=9;$j++){
					?>
						<td>
							<?php
								if($j<=$i){
									echo "$j*$i=".$i*$j;
								} 
								
							?>
						</td>
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
