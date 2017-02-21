<?php
	/**
	 * 
	 */
	class Stat{
		static $name="leilei";
		static $age = 18;
		
		static function say(){
			echo self::$age;
			self::haha();
		}
		
		static function haha(){
			echo "哈哈，我被调用了";
		}
		
	}
	echo Stat::$name;
	echo Stat::say();
	

?>