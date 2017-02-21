<?php
	$array = array(
	"id"=>array("name"=>"lei","password"=>123),
	"class"=>array("name"=>"wen","password"=>456)
	);
	var_dump($array);
	echo "<hr>";
//	echo $array[0]["name"];

	foreach ($array as $key => $value) {
		echo "value是：";
		var_dump($value);
		echo "<hr>";
		foreach ($value as $keys => $values) {
			echo "{$keys}是：$values"."<hr>";
		}
	}
?>