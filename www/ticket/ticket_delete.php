<a href="../index.php">首頁</a>
&nbsp;&nbsp;
<a href="ticket_query.php">訂票查詢</a>
<?php
ini_set('display_error','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../conn.php");
$tid=$_GET['tid'];
try{
 $sql = "delete from ticket where tid=$tid";
 //echo $sql."<br>\n";
 $msg='';
 
 $result=$connect->exec($sql);
 if($result===false){
  $msg="fail delete.<br>\n";
 }
 if($msg !='') echo $msg;
}catch(PDOException $e){
 echo $e->getMessage() . "<br>\n";
}
?>