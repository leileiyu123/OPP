<?php
	session_start();
	session_destroy();
	//对session进行操作的时候如果是赋值这种的会立刻能够显现
	//而如果是销毁这种的在当前页面是无法生效的，必须要刷新或者跳转到新的页面才能生效
//	var_dump($_SESSION);
//	if(isset($_SESSION)){
//		echo "注销失败";
//	}else{
//		echo "注销成功";
//	}
?>
<a href="3.index.php">验证</a>