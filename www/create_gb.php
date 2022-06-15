<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("conn.php");

try{
    $sql = 'create table gb (
            uid int auto_increment primary key,
            username varchar(20),
            passwd varchar(50),
            sex varchar(20),
            interest1 varchar(20),
            interest2 varchar(20),
            interest3 varchar(20),
            email varchar(20),
            city varchar(20),
        msg text,
            regtime datetime
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