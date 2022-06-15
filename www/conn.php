<?php
//$db_host = 'mysql:host=localhost;dbname=s45';
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$db_host = "mysql:host=210.240.170.251;dbname=s45";
$db_user = "s45";
$db_password = "965545";
try{
    $connect = new PDO($db_host,$db_user,$db_password);
    $connect->exec("SET NAMES utf8");
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "conn success!";
}
catch(PDOException $e){
    echo "error : ".$e->getMessage();
}
?>

