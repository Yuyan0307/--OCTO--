<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../conn.php");

try{
    $sql = 'create table ticket (
            tid int auto_increment primary key,
            uid varchar(20),
            depart varchar(2),
            arrive varchar(2),
            nono smallint,
            mydate date,
            trainoo varchar(5)
            )';
//echo $sql."<br>\n";
$msg='';

$result =$connect->exec($sql);
if($result !== false){
    $msg="Successfully create table ticket. <br>\n";
} else {
    $msg="Fail to create table ticket.";
}
if($msg != '')
    echo $msg;
}catch(PDOException $e){
    echo $e->getMessage();
}

?>