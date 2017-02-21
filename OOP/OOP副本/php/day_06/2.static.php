<?php
	/**
	 * 
	 */
	//声明类属性或方法为静态，就可以不实例化类而直接访问
	//静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用。
	//静态属性不可以由对象通过 -> 操作符来访问。
	class Stat {
		static $name = "leilei";
		static $age = "18";
		static function say(){
			echo self::$age;//类内部访问属性
			self::haha();//类内部访问方法
		}
		static function haha(){
			echo "哈哈我被调用了";
		}
		
	}
	echo Stat::$name;//外部访问属性
	Stat::say();//外部访问方法
	

?>