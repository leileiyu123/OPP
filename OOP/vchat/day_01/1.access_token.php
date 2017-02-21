<?php
	$appid = "wx9569fcaa6b4199d7";
	$appsecret = "0d8818f38113472bf5231ddba89c25db";
	$url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
//	$url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx9569fcaa6b4199d7&secret=0d8818f38113472bf5231ddba89c25db";
	
	function httpGet($url) {
	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
	    // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
	    // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
//	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);//用于https
	    curl_setopt($curl, CURLOPT_URL, $url);
	
	    $res = curl_exec($curl);
	    curl_close($curl);
	
	    return $res;
	}
	
	$result = httpGet($url);//json字符串
	var_dump($result);
	$what = json_decode($result,true);//不加true则为对象，若加第二个参数true,则得到的是数组
//	var_dump($what->access_token);
	$access_token = $what["access_token"];
	$api = "https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=$access_token";
	$list = httpGet($api);
	var_dump($list);
	
	
	
?>
