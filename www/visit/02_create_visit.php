<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../conn.php");

try{
    $sql = 'create table visitor (
            vid int auto_increment primary key,
            visit int
            )';
//echo $sql."<br>\n";
$msg='';

$result =$connect->exec($sql);
if($result !== false){
    $msg="Successfully create table visit. <br>\n";
} else {
    $msg="Fail to create table visit.";
}
if($msg != '')
    echo $msg;
}catch(PDOException $e){
    echo $e->getMessage();
}

?>