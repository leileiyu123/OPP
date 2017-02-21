<?php
	$url = "./test1";
	$arr = scandir($url);
	var_dump($arr);
	
	for($i=2;$i<count($arr);$i++){
		echo $arr[i]."<hr>";
		unlink($url."/".$arr[$i]);
	}
	
	if(rmdir("test1")){
		echo "删除成功";
	}else{
		echo "删除失败";
	}

?>