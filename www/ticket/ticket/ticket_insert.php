<?php
    if(!isset($_SESSION)){
        session_start();
    }
	ini_set('display_errors','on');
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	require_once("../conn.php");
    $uid=$_SESSION['id'];
	$depart=$_POST['depart'];
	$arrive=$_POST['arrive'];
	$nono=$_POST['nono'];
	$mydate=$_POST['mydate'];
	$trainoo=$_POST['trainoo'];

	try{
		$sql="insert into ticket(uid,depart,arrive,nono,mydate,trainoo) values('$uid','$depart','$arrive','$nono','$mydate','$trainoo')";
		echo $sql . "<br>\n";
		$msg='';
		$result = $connect ->exec($sql);
		if(result!==false){
			$msg="Success insert data to table ticket.<br>";
		}else{
			$msg="Fail to insert data to table ticket.";
		}
		if($msg != '') echo $msg;
	}catch (PDOException $e){
		echo $e->getMessage();
	}
?>
<a href="ticket_query.php">訂票查詢</a>&nbsp;&nbsp;