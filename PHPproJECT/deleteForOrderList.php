<?php
    include 'DBHelper.php';
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
	$ordernumber=_post("ordernumber");

    
	$sql="delete from orderlist where ordernumber='$ordernumber'";
    $result=excute($sql);
    
    if($result){
		echo '{"state": true, "message":"delete success!"}';
	}else{
		echo '{"state": false, "message": "delete fail!"}';
	} 
?>