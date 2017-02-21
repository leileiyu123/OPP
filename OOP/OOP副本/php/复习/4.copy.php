<?php
//	if(copy("2.index.txt", "hahah.txt")){
//		echo "拷贝成功";
//	}else{
//		echo "拷贝失败";
//	}
	
//	if(rename("hahah.txt", "heihei.txt")){
//		echo "重命名成功";
//	}else{
//		echo "重命名失败";
//	}

	if(unlink("hahah.txt")){
		echo "删除成功";
	}else{
		echo "删除失败";
	}
	
	
?>