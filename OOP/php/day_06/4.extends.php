<?php
	/**
	 * 
	 */
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
	
	/**
	 * 
	 */
	class Children extends Person {
		public $money;
		//在继承当中如果我们在子类中写了自己的构造函数
		//就需要通过 parent::__construct() 通过传参数
		//来让父类调用他的构造函数帮我们创建对应的属性
		//而自己独有的属性就在子类自身的构造函数中去设置
		function __construct($name,$age,$money){
			parent::__construct($name,$age);
			$this->money = $money;
//			$this->hello();
		}
		function hello(){
			echo "lanou";
		}
		
	}
	
	$person = new Person("lei",22);
//	var_dump($person);
	$person->info();
	echo "<hr>";
	
	$children = new Children("qw",21,10000);
	$children->info();
//	var_dump($children);
//	$children->info();
//	echo "<hr>";
//	echo $children->gender;
	

?>