<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("books");
	mysql_query("set names utf8");
	$query = "select * from books";
	$result = mysql_query($query);

	$xmlStr = <<<XML
<?xml version = "1.0" encoding = "utf-8"?>
	<books>
	</books>
XML;

$xml = simplexml_load_string($xmlStr);
//$book = $xml->addChild("book");
//$name = $book->addChild("name","海底两万里");
//
//$book1 = $xml->addChild("book");
//$name1 = $book1->addChild("name","西游记");

if(mysql_num_rows($result)>0){
	while($row = mysql_fetch_assoc($result)){
		$book = $xml->addChild("book");
		foreach($row as $key => $value){
			$$key = $book->addChild($key,$value);
		}	
	}
}

var_dump($xml);
$xml->saveXML("book.xml");

?>