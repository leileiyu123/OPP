<?php
	var_dump($_FILES);
	if(!file_exists("./img")){
		if(!mkdir("./img")){
			echo "上传失败";
			return;
		}
	}
	//上传上来的文件php会存放到临时文件夹下
	//如果想要取出来进行存放就需要拷贝出来
	move_uploaded_file($_FILES["iii"]["tmp_name"], "./img/".$_FILES["iii"]["name"]);
	
?>