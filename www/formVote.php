<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE &~E_WARNING);
include_once("conn.php");
$username=$_POST['username'];
$candidate=$_POST['candidate'];

$r="select count(*) from vote where username='$username'";
echo "$r<br>";
$rs=$connect->query($r);
$rs2=$rs->fetchColimn();
if($rs2==0){



$vtime2=new DateTime();
$vtime=$vtime2->format('Y-m-d H:i:s');

try{
	$sql="insert into vote(username,candidate,votetime) values('$username','$candidate','$vtime')";
	echo $spl."<br>\n";
	$msg='';
	$reslut=$connect->exec($sql);
	$count=$result->rowCount ();
	
	if($reslut!==false){
		$msg="Success insert<br>";
		echo "<a href='query_vote.php'>查詢投票結果</a><p>";
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
echo "序號=" . $uid ."<br>";
echo "投票人=" . $pid ."<br>";
echo "候選人=" . gen($sex) ."<br>";
echo "日期=" . $mtdata ."<br>";
}
else{
	echo "無法重複投票 你已投票完畢";

function gen($sex){
	if($sex==1){
		return "1";
	}
	else{
		return "2";
	}
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