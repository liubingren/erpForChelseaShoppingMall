<?php 
  include "DBHelper.php";
  
  $account=$_POST['account'];
  $pwd=$_POST['pwd'];
  $oldPassword=$_POST['oldPassword'];

  $sql="update student set password='$pwd' where account='$account';";

  $checkSql="select * from student where account='$account' and password='$oldPassword';";
  
  $array=query($checkSql);
  
  if(count( $array)>0){
	   $result=excute($sql);
	  if($result){
		 echo '{"state":true,"message":"resetpassword success!"}'; 
	  }else{
		  echo '{"state":false,"message":"resetpassword fail!"}';
	  }
  }else{
	   echo '{"state":false,"message":"old password not true!"}';
  }
	 
  ?>