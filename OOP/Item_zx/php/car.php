<?php
	include_once 'common.php';
    $cheapId=$_GET["cheapId"]; 
    $shuliang=$_GET["shuliang"];
    
	$query="select * from car where carId='$cheapId'";
    $result=mysql_query($query);
    while ($row=mysql_fetch_assoc($result)){
    	  $carId = $row["carId"];
    	  $shuliangcar=$row["shuliang"];
    	if($carId!=''){
  	  $num=$shuliangcar+$shuliang;
//  	  则直接给car表中carId的数量加1 
	 $query="UPDATE car SET shuliang='$num' WHERE carId=$cheapId";
     $result=mysql_query($query);
    }
else{
////  	如果不能查到则去大表中查询数据，然后插入到car表中，再显示car表
	$query="select * from cheap where cheapId='$cheapId'";
    $result=mysql_query($query);
    while ($row=mysql_fetch_assoc($result)){
		$productName=$row["productName"];
		 $productImg=$row["productImg"];
		 $currentPrice=$row["currentPrice"];
		 $sum=$currentPrice*$shuliang;
		 $shuliangNum=$row["shuliang"];
     }
	 $stu="insert into car (carId,smallImg,productName,currentPrice,shuliang,sum) values ('$cheapId','$productImg','$productName','$currentPrice','$shuliang','$sum')";
	  $result=mysql_query($stu);
    }
    }
   

   $query1="select * from car";
		$result1=mysql_query($query1);
		while ($row1=mysql_fetch_assoc($result1)){
			  $arr[]=$row1;
			  }
		//返回一个以 JSON 形式表示的 string
		   echo json_encode($arr);
			

?>


  




	
