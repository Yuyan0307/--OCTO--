<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../conn.php");
try{
	$sql="insert into visitor(visit) values(0)";
	echo $sql . "<br>\n";
	$msg='';
	$result=$connect->prepare($sql);
	$result->execute();
	$conunt=$result->rowCount();
	
	if($count==1){
		$msg="新增成功<br>";
	}else{
		$msg="新增失敗";
	}
	
	if(result!==false){
		$msg="successfully insert data to table gb. <br>\n";
		echo "<a href='query_vote.php'>查詢投票結果</a><p>";
	}else{
		$msg="Fail to insert data to table gb.";
	}
	if($msg !='') echo $msg;
}catch(PDOException $e){
	echo $e->getMessage();
}

?>