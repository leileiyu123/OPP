<?php
	/**
	 * 
	 */
	class Person {
		protected $name;
		private $age;
		public $gender = "women";
		
		function __construct($name,$age) {
			
			$this->age = $age;
			$this->name = $name;
			
		}
		
		protected function say(){
			echo "hello";
		}
		
		function info(){
			$this->say();
			echo $this->name.$this->gender;
		}
	}
	
	/**
	 * 
	 */
	class Children extends Person {
		public $money;
		function __construct($name,$age,$money) {
			parent::__construct($name,$age);
			$this->money = $money;
		}
		
		function say(){
			echo "haha";
		}
	}
	
	
	$person = new Person("lei",22);
	$person->info();
	echo "<hr>";
	
	$children = new Children("qw",21,10000);
	$children->info();

?>