<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../conn.php");

try{
    $sql = "update visitor set visit=visit+1 where vid=1";
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
$sql2="select * from visitor where vid=1";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
$row2=$rs2->fetch();
echo "訪客人數:" . $row2[visit];
echo "<br><br>";
echo strlen($eow2[visit]);
echo "<br><br>";
echo $row2[visit]%10;
echo "<br><br>";
echo floor($row2[visit]/10);
echo "<br><br>";
echo "<img src='png/1.png'>";

	
?>