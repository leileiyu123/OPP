<?php
	class Student{
		
	 	public $name="lei";
		//private 对于同一个类里的所有成员是可见的，即没有访问限制
		//但对于该类的外部代码是不允许改变甚至读操作，对于该类的子类，也不能访问。
		private $age="18";
		
		//定义常量
		const PI = 3.141592654;
		
		function say(){
			echo $this->age;
			//$this代表我们当前调用这个方法的对象
			$this->haha();
			//self代表我们当前的类
			echo self::PI;//类内部访问常量
		}
		//被修饰为protected的成员不能被该类的外部代码访问
		//但是对于该类的直接子类有访问权限
		protected function haha(){
			echo $this->name."今年".$this->age;
		}
	}
	$stu = new Student();
	var_dump($stu);
	$stu->say();
	echo "<hr>";
	echo Student::PI;//类外部访问常量

?>