<?php
//	$url = "./test2";
//	$arr = scandir($url);
//	var_dump($arr);
//	for($i=2;$i<count($arr);$i++){
//		unlink($url."/".$arr[$i]);
//	}
	if(rmdir("test2")){
		echo "删除目录成功";
	}else{
		echo "删除目录失败";
	}

?>