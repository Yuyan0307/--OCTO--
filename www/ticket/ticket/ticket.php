<?php
if(!isset($_SESSION)){
	session_start();
	}
//if(!isset($_SESSION['id'])){
	//echo'<meta http-equiv="refresh" content="1; url=./captcha_index.php">';
//}
echo $_SESSION['id'];
?>
<body>
<form action="ticket_insert.php" method="post">
出發站:
<select name="depart">
    <option value="00" select="true">請選擇
	<option value="02">台北市
	<option value="04">台中市
	<option value="07">高雄市
</select>
<br>
抵達站:
<select name="arrive">
    <option value="00" select="true">請選擇
	<option value="02">台北市
	<option value="04">台中市
	<option value="07">高雄市
</select>
<br>
張數:
<select name="nono">
    <option value="1" select="true">1
	<option value="2">2
	<option value="3">3
	<option value="4">4
</select>
<br>
日期:
<input type="date" name="mydate">
<br>	
車次:<input type="text" name="trainoo">
<br>
<input type="submit" value="送出">
</form>
</body>