<?php
	/**
	 * 
	 */
	class Teacher {
		
		public $name;
		private $age;
		protected $money;
		
		function __construct($name,$age,$money) {
			$this->name = $name;
			$this->ages($age);
			$this->info();
			$this->money = $money;
			
		}
		
		private function ages($age){
			$age -= 3;
			$this->age = $age;
			
		}
		
		private function info(){
			echo $this->name."今年".$this->age;
		}
		
		function getMoney(){
			return $this->money;
		}
		
		function setMoney($money){
			$this->money += $money;
			echo $this->money;
		}
		
		
	}
	
	$teacher = new Teacher("lei",22,9999);
	echo "<hr>";
	echo $teacher->getMoney();
	echo "<hr>";
	$teacher->setMoney(1111);
	

?>