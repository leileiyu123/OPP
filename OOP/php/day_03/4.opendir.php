<?php
	//"."代表当前php所在的目录
//	$fh = opendir(".");//opendir打开目录句柄
	//".."代表当前php所在的目录的上级目录
	$fh = opendir("..");
	while($files = readdir($fh)){
//		var_dump($files);
//		echo "<hr>";
	}
	closedir($fh);
	
//	$arr = scandir("./test1");//此时"."代表day_03
//	echo $arr[2]."<hr>";
//	var_dump($arr);
//	$name = "./test1/".$arr[2];
	//想要删除一个文件必须要给一个相对于我们当前php的一个相对路径，
	//而不是一个直接的文件名，否则相当于告诉代码帮你删除当前php所在路径下的某个文件
	//而不是你想要的路径下的某个文件
//	unlink ($name);
//	echo "<hr>";
//	$array = scandir("./test1");
//	var_dump($array);

	//要删除的文件夹必须是空文件夹，否则无法删除
	//因为我们系统的文件管理机制会帮我们生成.DS_Store这个文件
	//所以在删除失败的时候一定要考虑清楚该文件夹是否真的清空了
	//不要觉得肉眼看到的就是真实的，使用scandir输出看一下
	if(rmdir("test1")){
		echo "删除目录成功";
	}else{
		echo "删除目录失败";
	}
	
?>