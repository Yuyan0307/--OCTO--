<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>php圖形驗證碼</title>
   
    <script>
        function refresh_code(){ 
            document.getElementById("imgcode").src="../captcha.php"; 
        } 
    </script>

   

    <form name="form1" method="post" action="ticket_query2.php">
		<center>
		帳號:<input type="text" name="id" size="10" maxlength="10" /> <br>
		乘車日:<input type="date" name="mydate"> 
		
		<p><img id="imgcode" src="../captcha/captcha.php" onclick="refresh_code()"/><br/>
			點擊圖片可以更換驗證碼
		</p>
		<input type="text" name="checkword" size="10" maxlength="10" />
		<input type="submit" name="Submit" value="送出"/>
		</center>
    </form>


