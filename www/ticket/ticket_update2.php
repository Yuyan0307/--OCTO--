<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../conn.php");
$tid=$_POST['tid'];
$depart=$_POST['depart'];
$arrive=$_POST['arrive'];
$nono=$_POST['nono'];
$mydate=$_POST['mydate'];
$trainno=$_POST['trainno'];
echo "tid=$tid,depart=$depart,arrive=$arrive,nono=$nono,mydate=$mydate,trainno=$trainno";

try{
    $sql = "update ticket set depart='$depart',arrive='$arrive',nono=$nono,mydate='$mydate',trainno='$trainno' where tid=$tid";
	echo $sql."<br>\n";
	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="fail update. <br>\n";
	} 
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}
?>
<a href="../index.php">首頁</a>
&nbsp;&nbsp;
<a href="ticket_query.php">訂票查詢</a>
