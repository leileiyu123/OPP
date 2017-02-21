<?php
	$name = "leilei";
	//双引号中出现的变量会被变量的值替代
	echo "hello,$name";
	
	echo "<hr>";
	//单引号(最外层)中出现的变量不会被变量的值替代
	echo 'hello,$name';
	
	echo "<hr>";
	echo "hello,{$name}heheh";
	
	echo "<hr>";
	//字符串定界的方法，使用定界符语法"<<<"
	$str = <<<EOD
	 Example of string using heredoc syntax.
EOD;
	echo $str;

?>