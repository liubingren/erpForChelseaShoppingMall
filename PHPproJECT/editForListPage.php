<?php
    include 'DBHelper.php';
	function _post($str){
	    $val = !empty($_POST[$str]) ? $_POST[$str] : null;
	    return $val;
	}
	$id=_post("id");
	$title=_post("title");
	$price=_post("price");
	$img=_post("img");
	$checkSql="SELECT * FROM listpage where id='$id';";
  
    $array=query($checkSql);
    if(count($array)>0){
    	$sql="update listpage set title='$title',price='$price',img='$img' where id='$id'";
	    $result=excute($sql);
    }else{
    	$Sql="insert into listpage(id,title,price,img) values('$id','$title','$price','$img')";
	    $result=excute($Sql);
    }
    if($result){
		echo '{"state": true, "message":"add success!"}';
	}else{
		echo '{"state": false, "message": "add fail!"}';
	} 
?>