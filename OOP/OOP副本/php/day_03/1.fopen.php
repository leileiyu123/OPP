<?php
	$fh = fopen("1.index.txt","r");
//	var_dump($fh);
	//fread必须要配合我们的fopen来进行使用
	//第一个参数就是我们fopen得到的资源类型的文件流
	//第二个参数就是我们想要读取的文件长度，如果是中文要一次读取三个长度
	//否则会出现乱码，如果需要获取整个文件的长度
	//就要配合我们的filesize方法来获取到我们文件的大小
	$str = fread($fh,filesize("1.index.txt"));
	echo $str;
	fclose($fh);
	echo "<hr>";
	
	//fgets需要配合fopen并且是获取一行的方法
	$fh = fopen("1.index.txt", "r");
	$str1 = fgets($fh);//fgets — 从文件指针中读取一行
	echo $str1;
	$str1 = fgets($fh);
	echo $str1;
	$str1 = fgets($fh);
	echo $str1;
	fclose($fh);
	echo "<hr>";
	
	//逐行读取文件
	//feof — 测试文件指针是否到了文件结束的位置
	$fh = fopen("1.index.txt", "r");
	//如果想要用fgets获取所有的内容，需要配合feof方法检查文件指针，
	//是否已经到达了结尾
	while(!feof($fh)){
		$str1 = fgets($fh);
		echo $str1."<hr>" ;
	}
	fclose($fh);
	
	//file()函数将文件读取到数组中，各元素由换行符分隔
	//file方法会将文件的内容根据回车分割放到我们的数组中
	$arr = file("1.index.txt");
	var_dump($arr);
	echo "<hr>";
	
	//file_get_contents()函数将文件内容读到字符串中;
	//最常用的方法
	$string = file_get_contents("1.index.txt");
	echo $string;
?>