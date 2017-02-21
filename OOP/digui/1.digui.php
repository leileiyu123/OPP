<?php
	function add($num){
		$sum = 0;
		for($i = 1;$i < $num;$i++){
			$sum += $i;
		}
//		var_dump($sum);
	}
	add(4);
	
	function digui($num){
		$num--;
		if($num==1){
			return 1;
		}
		return digui($num) + $num;
	}
//	var_dump(digui(4));
	
	
	function deletedir($things){
		//判断要删除的是 文件夹 or 文件
		if(is_dir($things)){
			//读取文件夹里的内容
			$arr = scandir($things);
			//看是否存在除了 ./..之外的文件
			if(count($arr)>2){
				for($i=2;$i<count($arr);$i++){
					//判断是否为文件夹
					if(is_dir($things."/".$arr[$i])){
						deletedir($things."/".$arr[$i]);
					}else{
						unlink($things."/".$arr[$i]);
					}
				}
			}
			//移除空文件夹
			rmdir($things);
		}else{
			unlink($things);
		}
	}
	deletedir("day_05");
	
?>