<?php
    include 'DBHelper.php';
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
	$deleteid=_post("deleteid");

    
	$sql="delete from student where id='$deleteid'";
    $result=excute($sql);
    
    if($result){
		echo '{"state": true, "message":"delete success!"}';
	}else{
		echo '{"state": false, "message": "delete fail!"}';
	} 
?>