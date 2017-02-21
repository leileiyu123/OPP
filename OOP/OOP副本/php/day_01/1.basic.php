<?php 
   $age=28;
   $color="red";
   $age = "12";
   $sum = 15+"12"; 
   // php当中 如果要进行字符串的拼接 需要使用"."  "+"只做字符串的拼接
   echo $age.$sum;
   echo "<hr>";
   
   // 值赋值，只是数值的拷贝
   // 不会关联起来
   $num1 = "123";
   $num2 = $num1;
   $num2 = "321";
   echo "<he>";
   echo $num1;
   echo "<hr>";
   
   
   // 引用赋值,同用一块地址符，，其中一个改变 ，也就代表这 公用的 地址区间  改变了
   $name1 = "leilei";
   $name2 = &$name1;
   echo $name1;
   echo $name2;
   $name2 = "mumu";   
   echo "<hr>";
   echo $name1;
   
   // 变量的变量
   $name = "lei";
   $$name = "cc";
   echo "<hr>";
   echo $name;
   echo "<hr>";
   echo $lei;
   echo "<hr>";
   
   
   // $_SERVER 是一个 超全局变量
   // 实际上就是 一个关联数组
   // 想要从关联数组中取出值来
// print_r($_SERVER);
   // 就是 数组 [值]的形式 就 ok 了
   echo $_SERVER['SERVER_NAME'];
// echo $_SERVER;// echo只能输出字符串形式的，不能输出 数组，否则会报错


	
   
?>