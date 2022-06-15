<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("conn.php");

try{
    $sql = 'create table vote (
            vid int auto_increment primary key,
            username varchar(10),
			candidate tinyint unsigned,
			votetime datetime
       
            )';
//echo $sql."<br>\n";
$msg='';

$result =$connect->exec($sql);
if($result !== false){
    $msg="Successfully create table gb. <br>\n";
} else {
    $msg="Fail to create table gb.";
}
if($msg != '')
    echo $msg;
}catch(PDOException $e){
    echo $e->getMessage();
}

?>