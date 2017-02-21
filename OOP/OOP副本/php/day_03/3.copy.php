<?php
//	if(copy("1.index.txt", "hahaha.txt")){
//		echo "文件拷贝成功";
//	}else{
//		echo "文件拷贝失败";
//	}
	
//	if(rename("hahaha.txt", "heihei.txt")){
//		echo "重命名成功";
//	}else{
//		echo "重命名失败";
//	}

	if(unlink("heihei.txt")){
		echo "删除成功";
	}else{
		echo "删除失败";
	}
	
	file_put_contents("lei.txt", "ye98w3");
?>