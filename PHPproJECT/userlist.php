<?php
  include "DBHelper.php";
  
  $checkSql="SELECT * FROM student;";
  
  $array=query($checkSql);
  
//	json转格式
  echo json_encode($array, JSON_UNESCAPED_UNICODE);
 
?>