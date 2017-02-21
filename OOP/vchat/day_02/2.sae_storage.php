<?php
	include_once "vchat_common.php";
	use sinacloud\sae\Storage as Storage;
    $s = new Storage(); 
	//$s->putObject("你好蕾蕾么么哒","leilei","2.access_token.txt",array(),array('Content-Type'=>'text/plain;charset=utf-8'));
	//echo $s -> getUrl("leilei","1.jpeg");

	$obj = $s->getObject("leilei","2.access_token.txt");
	$content = $obj->body;
	var_dump($content);
	$arr = json_decode($content,true);
	if($arr){
		if($arr["times"]<time()){
			$result = json_decode(httpGet($url),true);
			$access_token = $result["access_token"];
			$times = time()+$result["expires_in"]/2;
			$setArr["access_token"]=$access_token;
			$setArr["times"] = $times;
			$json = json_encode($setArr);
			$s->putObject($json,"leilei","2.access_token.txt",array(),array('Content-Type'=>'text/plain;charset=utf-8'));
		}else{
			$access_token = $arr["access_token"];
		}
	}else{
		$arr = json_decode(httpGet($url),true);
		$access_token = $arr["access_token"];
		$times = time()+$arr["expires_in"]/2;
		$setArr["access_token"]=$access_token;
		$setArr["times"] = $times;
		$json = json_encode($setArr);
		$s->putObject($json,"leilei","2.access_token.txt",array(),array('Content-Type'=>'text/plain;charset=utf-8'));
	}
?>