<?php
	$url = "http://www.BAIDU.com";
	echo strtolower($url);//将字符串转化为小写字母
	echo "<hr>";
	echo  strtoupper($url);//将字符串转化为大写字母
	echo "<hr>";
	echo $url;
	echo "<hr>";
	
	//第三个参数可选参数写什么值
	//就从什么位置开始包含写的那个值，即指定开始查找的位置
	echo strpos($url, "tp",2);//区分大小写的方式找到 tp 第一次出现的位置，找不到返回false
	echo "<hr>";
	echo stripos($url, "tp");//与stripos的功能相同，只是查找时不区分大小写
	echo "<hr>";
	
	$count = 1;
	//如果设置了第四个参数就会将方法替换的次数设置到我们的第四个参数之中
	//而不是通过第四个参数来决定我们到底要替换多少次
	echo str_replace("t", "s",$url,$count);
//	echo str_ireplace("t", "s",$url,$count);//与str_replace功能相同，只是不区分大小写
	echo "<hr>";
	echo $count;
	echo "<hr>";
	
	//截取字符串
	//第二个参数表示从什么位置开始截取
	//第三个参数表示截取的长度，如果没有给第三个参数，那么默认一直到结尾
	echo substr("Hello world", 3);
	echo "<hr>";
	echo substr("hello world", 3, 5);
	echo "<hr>";
	
	//查询到的结果如果是返回后面的内容
	//会帮我们将查询的部分也返回出来(false表示返回后面的内容)
	//而如果我们设置的第三个参数为true
	//表示我们要返回查找到的结果的前面的内容
	//就不会带上我们查询的部分了
	echo strstr($url, "tt",true);
	echo stristr($url, "tt",true);//功能与strstr相同，只是不区分大小写
	echo "<hr>";
	
	$str = " dasda";
	//第二个参数如果不给，就会删除两侧空格
	//如果给了，且两侧没有空格，就是删除该参数内容
	echo "(".trim($str,"da").")";
//	echo "(".ltrim($str,"da").")";//删除字符串左侧空格或其他预定义字符，第二个参数用法同上
//	echo "(".rtrim($str,"da").")";//删除字符串右侧空格或其他预定义字符，第二个参数用法同上
	echo "<hr>";
	
	$str1 = ",hhh
	sadfwe";
	echo $str1;
	echo "<hr>";
	echo nl2br($str1);//将字符串中换行(\n)转换成HTML换行标签(<br/>)
	echo "<hr>";
	
	$str2 = "urei<p>ppp<a>aaa</a>qqq</p>1111";
	echo strip_tags($str2,"<p></p>");//第二个参数表示指定要保留的标签
//	echo $str2;
	echo "<hr>";

	$str3 = "<p>hehehe</p>";
	echo htmlspecialchars($str3);//把一些预定义的字符转化为HTML实体
	echo "<hr>";
	
	$str4 = "1,2,3,4,5,6";
	$arr = explode(',', $str4);//返回由字符串组成的数组
	print_r($arr);
	echo "<hr>";
	
	$arr = array('a','b', 'c', 'd');
	$str5 = implode('|', $arr );//将数组元素连接成字符串
	echo $str5;
	echo "<hr>";
	
	$str6 = "hei boy";
	echo strrev($str6);//反转字符串
	
	

?>