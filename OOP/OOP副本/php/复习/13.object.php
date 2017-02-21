<?php
	/**
	 * 
	 */
	class Student{
		public $name = "leilei";
		private $age = "18";
		
		const PI = 3.141592654;
		
		function say(){
			echo $this->age;
			$this->haha();
			echo self::PI;
		}
		
		protected function haha(){
			echo $this->name."今年".$this->age;
		}
		
	}
	
	$student = new Student();
	var_dump($student);
	echo "<hr>";
	$student->say();
	echo "<hr>";
	echo Student::PI;
	

?>