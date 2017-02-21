<?php 
	// 自定义 常量的方法，默认对大小写敏感
	// true:不敏感  false:敏感
    define('PI',3.1415926,true);//第三个参数 是否对大小写不敏感
	echo pi;
     echo "<hr>";
	 
	 echo PHP_OS;//php所在操作系统的名称
	 echo "<hr>";
	 echo PHP_VERSION;//当前php的版本号
	 //phpinfo();
	 echo "<hr>";
	 echo __FILE__;//文件的完整路径和文件名
	 
	 echo "<hr>";
	 echo __LINE__;//文件中的当前行号
	 
	 echo "<hr>";
	 function cc(){
	 	echo __FUNCTION__;//函数名称
	 }
	 cc();
?>