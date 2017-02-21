<?php
		class Person {
		//protected和private两个修饰符
		//都是只能在类内部使用而无法在类外使用的
		//但是private不能通过继承给我们的子类使用我们的属性，
		//但是protected是可以的，将我们的属性继承给子类让子类在类内进行使用
		protected $name;
		private $age;
		public $gender = "women";
		
		function __construct($name,$age) {
			$this->name = $name;
			$this->age = $age;
		}
		
		protected function hello(){
			echo "hello";
		}
		
		function info(){
			$this->hello();
			echo $this->name.$this->gender;
		}
	}
?>