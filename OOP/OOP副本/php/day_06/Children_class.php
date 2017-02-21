<?php
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
?>