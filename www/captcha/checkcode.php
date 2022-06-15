<?php
if(!isset($_SESSION)){
    session_start();
    }  //判斷session是否已啟動
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_WARNING);
include_once("../conn.php");
if((!empty($_SESSION['check_word'])) && (!empty($_POST['checkword']))){  //判斷此兩個變數是否為空
    
    if($_SESSION['check_word'] == $_POST['checkword']){
        
         $_SESSION['check_word'] = ''; //比對正確後，清空將check_word值
         $id=$_POST['id'];
         $pw=$_POST['pw'];
         $r="select count(*) from gb where username='$id' and passwd='$pw'";
         echo "$r<br>";
         $rs=$connect->query($r);
         $rs2=$rs->fetchColumn();
         if($rs2==1){
             $_SESSION['id']=$id;
             echo "登入成功";
             echo '<a href="../ticket/ticket.php">前往訂票</a>';
         }
         else{
             echo '<p> </p><p> </p><a href="./chptcha_index.php">登入失敗，將於一秒後跳轉(按此也可返回)</a>';
             echo '<meta http-equiv="refresh" content="1; url=./captcha_index.php">';
         }

    
    }
}
?>