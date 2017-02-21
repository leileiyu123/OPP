<?php
	$cb = $_GET["callback"];
	$json = json_encode($_GET);
	$json1 = '{"msg":"蕾蕾很高兴遇见你"}';
	echo $cb."(".$json1.")";
?>