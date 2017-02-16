<?php 
  include "DBHelper.php";
  
  $account=$_POST['account'];
  $pwd=$_POST['pwd'];

  $checkSql="select * from student where account='$account' and password='$pwd';";
  
  $array=query($checkSql);
  
  if(count( $array)>0){
	  echo '{"state":true,"message":"login success!"}';
	  session_start();
	  $_SESSION['account']=$account;
  }else{
	  echo '{"state":false,"message":"login fail!"}';
  }
  ?>