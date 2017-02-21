<?php
	$appid = "wx9569fcaa6b4199d7";
	$appsecret = "0d8818f38113472bf5231ddba89c25db";

	function httpGet($url) {
	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
	    // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
	    // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
	//	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);//用于https
	    curl_setopt($curl, CURLOPT_URL, $url);
	
	    $res = curl_exec($curl);
	    curl_close($curl);
	
	    return $res;
	}
	
	function getAccess_token(){
		//方法外部声明的全局变量，在方法内部不能直接调用，要用global来声明下
		global $appid;
		global $appsecret;
		$json = file_get_contents("2.access_token.txt");
		$arr = json_decode($json,true);
		if($arr["expires_in"] < time()){
			$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
			$result = httpGet($url);
			$resultArr = json_decode($result,true);
			$access_token = $resultArr["access_token"];
			$times = time()+$resultArr["expires_in"]/2;
			$setArr["access_token"] = $access_token;
			$setArr["expires_in"] = $times;
			$str = json_encode($setArr);
			file_put_contents("2.access_token.txt", $str);
		}else{
			$access_token = $arr["access_token"];
		}
		return $access_token;
	}	
	$access_token = getAccess_token();
	var_dump($access_token);
	$api = "https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=$access_token";
	$list = httpGet($api);
	var_dump($list);


?>