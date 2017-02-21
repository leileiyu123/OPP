<?php
	$fh = opendir(".");
//	$fh = opendir("..");
	while($files = readdir($fh)){
//		var_dump($files);
//		echo "<hr>";
	}
	closedir($fh);
	
	
//	$arr = scandir("./test1");
//	echo $arr[2]."<hr>";
//	var_dump($arr);
//	$name = "./test1/".$arr[2];
//	unlink($name);
//	echo "<hr>";
//	$array = scandir("./test1");
//	var_dump($array);

	if(rmdir("test1")){
		echo "删除目录成功";
	}else{
		echo "删除目录失败";
	}
	
?>