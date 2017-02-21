<?php
	if(file_exists("./txt")){
		echo "文件存在";
	}else{
		if(mkdir("./txt")){
			echo "创建成功";
		}else{
			echo "创建失败";
		}
	}


//	if(mkdir("./txt1")){
//		echo "创建成功";
//	}else{
//		echo "创建失败";
//	}
//	chmod("./txt1", 0777);
?>