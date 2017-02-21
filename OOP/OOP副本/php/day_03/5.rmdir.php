<?php
	$url = "./test2";
	$arr = scandir($url);
	var_dump($arr);
	echo "<hr>";
	//因为要跨过.和..所以要从第三个开始
	for($i=2;$i<count($arr);$i++){
//		echo $arr[$i]."<hr>";
		unlink($url."/".$arr[$i]);
	}
	
	//经过for循环把所有文件删除之后
	//变成了空文件夹，就可以将文件夹删除了
	//否则有内容的文件夹是不能被删除的
	if(rmdir("test2")){
		echo "删除目录成功";
	}else{
		echo "删除目录失败";
	}
	
	
?>