<?php 
  include "DBHelper.php";
  
  $account=$_POST['account'];
  $pwd=$_POST['pwd'];

  $sql="INSERT INTO student(account,password) VALUES('$account', '$pwd')";
  
  $checkSql="select * from student where account='$account';";
  
  $array=query($checkSql);
  
  if(count( $array)>0){
	  echo '{"state":false,"message":"email already exists!"}';
  }else{
	  $result=excute($sql);
	  if($result){
		 echo '{"state":true,"message":"register success!"}'; 
	  }else{
		  echo '{"state":false,"message":"register fail!"}';
	  }
  }
  ?>