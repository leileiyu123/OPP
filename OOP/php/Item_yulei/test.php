<?php
	//主库地址+端口， 用户名 ， 密码
	$db = mysql_connect("w.rdc.sae.sina.com.cn:3306","olwj2yzlnx","ix2lyx024y5hh4kh4i53y3mkhm1xk114x0lzj22l");
	if($db){
			mysql_select_db('app_xiaoyuleilei',$db);//连库方式在新浪云里提供
			$query = "select * from user";
			$result = mysql_query($query);
			$row = mysql_fetch_assoc($result);
			var_dump($row);
	}
?>