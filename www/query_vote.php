<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
require_once("conn.php");
$sql="select * from vote order by vid desc";
$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$rs=$connect->query($sql);
$rs->setFetchMode(PDO::FETCH_BOTH);
echo "<table>";
echo "<tr>";
echo "<th>序號";
echo "<th>投票人";
echo "<th>候選人";
echo "<th>投票時間";
while($row=$rs->fetch()){
	echo "<tr>";
	echo "<td>" . $row[0];
	echo "<td>" . $row[1];
	echo "<td>" . $row[2];
	echo "<td>" . $row[votetime];
}
?>