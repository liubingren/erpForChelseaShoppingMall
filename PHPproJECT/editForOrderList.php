<?php
    include 'DBHelper.php';
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
	$account=_post("account");
	$product=_post("product");
	$ordernumber=_post("ordernumber");
	$total=_post("total");
	$length=_post("length");
	$checkSql="SELECT * FROM orderlist where ordernumber='$ordernumber';";
  
    $array=query($checkSql);
    if(count($array)>0){
    	$sql="update orderlist set account='$account',product='$product',length='$length',total='$total' where ordernumber='$ordernumber'";
	    $result=excute($sql);
    }else{
    	$Sql="insert into orderlist(account,product,length,total,ordernumber) values('$account','$product','$length','$total','$ordernumber')";
	    $result=excute($Sql);
    }
    if($result){
		echo '{"state": true, "message":"add success!"}';
	}else{
		echo '{"state": false, "message": "add fail!"}';
	} 
?>