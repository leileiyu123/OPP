<?php
	/**
	 * 
	 */
	class Teacher {
		public $name;
		private $age;
		protected $money;
		
		//构造函数
		function __construct($name,$age,$money) {
			$this->name = $name;
//			$this->age = $age;
			$this->ages($age);
			$this->info();
			$this->money = $money;
		}
		
		//析构函数
		function __destruct(){
			echo "<hr>";
			echo "hello,下次见";
		}
		
		private function ages($age){
			$age -= 3;
			$this->age = $age;
//			$this->age -= 3;
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
	$tea = new Teacher("lei",21,9999);
//	var_dump($tea);
	echo "<hr>";
	echo $tea->getMoney();
	echo "<hr>";
	$tea->setMoney(1111);
	
?>