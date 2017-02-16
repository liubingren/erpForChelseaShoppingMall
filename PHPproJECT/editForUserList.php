<?php
    include 'DBHelper.php';
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
	$id=_post("id");
	$password=_post("password");
	$account=_post("account");
	$checkSql="SELECT * FROM student where id='$id';";
  
    $array=query($checkSql);
    if(count($array)>0){
    	$sql="update student set account='$account',password='$password' where id='$id'";
	    $result=excute($sql);
    }else{
    	$Sql="insert into student(id,password,account) values('$id','$password','$account')";
	    $result=excute($Sql);
    }
    if($result){
		echo '{"state": true, "message":"add success!"}';
	}else{
		echo '{"state": false, "message": "add fail!"}';
	} 
?>