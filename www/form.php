<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE &~E_WARNING);
include_once("conn.php");
$username=$_POST['uid'];
$passwd=$_POST['pid'];
$sex=$_POST['gender'];
$city=$_POST['city'];
$interest1=$_POST['interest1'];
$interest2=$_POST['interest2'];
$interest3=$_POST['interest3'];
$gmail=$_POST['email'];
$msg=$_POST['gossip'];
$mydate=new DateTime();
$mydate2=$mydate->format('Y-m-d H:i:s');

try{
	$sql="insert into gb(username,passwd,sex,city,interest1,interest2,interest3,msg,regtime) values('$username','$passwd','$sex','$city','$interest1','$interest2','$interest3','$msg','$mydate2')";
	echo $spl."<br>\n";
	$msg='';
	$reslut=$connect->exec($sql);
	if($reslut!==false){
		$msg="Success insert<br>";
		echo "<a href='query_gb.php'>會員查詢</a><p>";
	}
	else{
		$msg="Fail insert";
	}
	if($msg!= '')
		echo $msg;
}
catch(PDOException $e){
	echo $e->getMessage();
}

//echo "帳號.$puid";
echo "帳號=" . $uid ."<br>";
echo "密碼=" . $pid ."<br>";
echo "性別=" . gen($gender) ."<br>";
echo "縣市=" . tcity($city) ."<br>";
echo "日期=" . $mtdata ."<br>";
echo "留言=" . $gossip ."<br>";
function gen($gender){
	if($gender==1){
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