<a href="../index.php">首頁</a>
&nbsp;&nbsp;
<a href="ticket_query.php">訂票查詢</a>
<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../conn.php");
$tid=$_GET['tid'];
$sql="select * from ticket where tid=$tid";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs=$connect->query($sql);
$rs->setFetchMode(PDO::FETCH_BOTH);
echo "<center>\n";
echo "<table border='0' width='90%'>\n";
echo "<form action='ticket_update2.php' method='post'>\n";
echo "<input type='hidden' name=tid value=$tid>\n";
while($row=$rs->fetch()){
	echo "<tr><td>出發站<td>$row[depart]<td><input type='text' name='depart' value=$row[depart]>\n";
	echo "<tr><td>抵達站<td>$row[arrive]<td><input type='text' name='arrive' value=$row[arrive]>\n";
	echo "<tr><td>張數<td>$row[nono]<td><select name='nono'>\n
							<option value='1'>1\n
							<option value='2'>2\n
							<option value='3'>3\n
							<option value='4'>4\n
							</select>\n";
	echo "<tr><td>乘車日期<td>$row[mydate]<td><input type='date' name='mydate'>\n";
	echo "<tr><td>抵達站<td>$row[trainno]<td><input type='text' name='trainno' value=$row[trainno]>\n";
	echo "<tr><td colspan='3' align='center'><input type='submit' value='修改'>\n";
}
echo "</form>\n";
echo "</table>\n";
?>