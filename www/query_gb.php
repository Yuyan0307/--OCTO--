<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
require_once("conn.php");
$sql="select * from gb order by uid desc";
$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$rs=$connect->query($sql);
$rs->setFetchMode(PDO::FETCH_BOTH);
echo "<table>";
echo "<tr>";
echo "<th>序號";
echo "<th>帳號";
echo "<th>密碼";
echo "<th>性別";
echo "<th>城市";
echo "<th>興趣";
echo "<th>興趣2";
echo "<th>興趣3";
echo "<th>留言";
echo "<th>留言時間";

while($row=$rs->fetch()){
	echo "<tr>";
	echo "<td>" . $row[0];
	echo "<td>" . $row[1];
	echo "<td>" . $row[password];
	echo "<td>" . gen($row[sex]);
	echo "<td>" . tcity($row[city]);
	echo "<td>" . $row[interest1];
	echo "<td>" . $row[interest2];
	echo "<td>" . $row[interest3];
	echo "<td>" . $row[msg];
	echo "<td>" . $row[regtime];
};
function gen($sex){
	if($sex==1){
		return "男";
	}
	else{
		return "女";
	}
} 
function tcity($city){
	switch($city){
		case"02":
			return"台北市";
		case"04":
			return"台中市";
		case"07":
			return"高雄市";
		default :
			return"請選擇";
	}
}
?>