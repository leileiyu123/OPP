<?php
	$db = mysql_connect("localhost","root","");
	mysql_select_db("myfirstsql");
	mysql_query("set names utf8");
	define("PAGESIZE", 3);
	$page = 0;
	if(isset($_GET["page"])){
		$page = $_GET["page"];
	}
	
	//查询记录数量的sql语句
	$query = "select count(userId) from user";
	//该语句查询到的 结果集 中只有一条记录
	//所以我们没有必要去使用while循环
	//直接用fetch方法就ok了
	//因为该语句如果要用关联数组取出我们的记录数量要写很多字
	//所以喜欢使用row方法来获取我们的结果数组
	//得到的就是一个索引数组，并且里面只有一个元素就是 $row[0]
	//也就是我们想要的记录个数
	//通过 $row[0]将我们的记录个数存到我们的变量中以供使用
	$result = mysql_query($query);
	$row = mysql_fetch_row($result);
//	var_dump($row);
	//一共有多少条记录
	$count = $row[0];
//	echo $count;
	//总共需要的页码数
	$pages = ceil($count/PAGESIZE);
//	echo $pages;
	
//	$name = "蕾蕾";
//	//最外层是分号，就能用变量 $name，若最外层为单引号则不能
//	$query = "update user set name = '小文',password = 5677 where userId = 21";
//	mysql_query($query);
	//用于获取前一次 MySQL 操作所影响的记录数
//	if(mysql_affected_rows()>0){
//		echo "插入成功";
//	}else{
//		echo "插入失败";
//	}
	
	
	$query = "select * from user limit ".$page*PAGESIZE.",".PAGESIZE;
	echo $query;
	$result = mysql_query($query);
//	echo mysql_num_rows($result);
	if(mysql_num_rows($result)){ //mysql_num_rows()函数用于获取查询返回的记录数;
		while($row = mysql_fetch_assoc($result)){
	?>
		<h1><?php echo $row["name"].$row["password"];?></h1>
	<?php		
		}
	}
?>
<?php
	for($i=0;$i<$pages;$i++){
	?>
		<a href="2.page.php?page=<?php echo $i;?>"><?php $num=$i+1; echo "第".$num."页";?></a>
	<?php	
	}
?>	
	

