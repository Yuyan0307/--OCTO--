<a href="../index.php">首頁</a>
&nbsp;&nbsp;
<a href="ticket_query.php">訂票查詢</a>	

<?php

if(!isset($_SESSION)){
    session_start();
    }  //判斷session是否已啟動
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE);
include_once("../conn.php");
if((!empty($_SESSION['check_word'])) && (!empty($_POST['checkword']))){  //判斷此兩個變數是否為空

    if($_SESSION['check_word'] == $_POST['checkword']){

          $_SESSION['check_word'] = ''; //比對正確後，清空將check_word值
          //比對帳密開始
          $uid=$_POST['id'];
          $mydate=$_POST['mydate'];

          $r="select count(*) from ticket where uid='$uid' and mydate='$mydate'";
          echo "$r<br>";
          $rs=$connect->query($r);
          $rs2=$rs->fetchColumn();
		  
          if($rs2>=1){//比對帳密正確
		    $_SESSION['uid'] = $id;
			$t="select * from ticket where uid='$uid' and mydate='$mydate'";
			$connect->setAttribute(PDO::ATTR_CASE,PDO::CASE_NATURAL);
			$rst=$connect->query($t);
			$rst->setFetchMode(PDO::FETCH_BOTH);
			echo "<center>";
			echo "<table border='1' width='100%'>";
			echo "<tr>";
			echo "<th>";
			echo "<th>";
			echo "<th>序號";
			echo "<th>帳號";
			echo "<th>出發站";
			echo "<th>抵達站";
			echo "<th>張數";
			echo "<th>乘車日期";
			echo "<th>乘車車次";
			while($row=$rst->fetch()){
				echo "<tr>";
				echo "<td><a href=ticket_update.php?tid=$row[tid]>修改</a>";
				echo "<td><a href=ticket_delete.php?tid=$row[tid]>刪除</a>";
				echo "<td>" . $row[tid];
				echo "<td>" . $row[uid];
				echo "<td>" . $row[depart];
				echo "<td>" . $row[arrive];
				echo "<td>" . $row[nono];
				echo "<td>" . $row[mydate];
				echo "<td>" . $row[trainoo];
			}
			echo "</table>";
		  }else{
			  echo '<p> </p><p> </p><a href="ticket_query.php">Error無訂票資料，按此返回</a>';
		  }
	}
}

?>