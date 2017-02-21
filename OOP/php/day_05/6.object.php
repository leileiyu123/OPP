<?php
	/**
	 * 
	 */
	class Person{
		public $name;
		public $pass;
		private $age;
	}
	
	$person = new Person();
	$person->name = "leilei";//对公有属性赋值
	var_dump($person);
	$person->pass;//获取公有属性
	
	

?>