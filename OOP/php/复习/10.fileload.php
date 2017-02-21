<?php
	var_dump($_FILES);
	if(!file_exists("./img")){
		if(!mkdir("./img")){
			echo "上传失败";
			return;
		}
	}
	move_uploaded_file($_FILES["iii"]["tmp_name"], "./img/".$_FILES["iii"]["name"]);
?>