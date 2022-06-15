<script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>php圖形驗證碼</title>
   
    <script>
        function refresh_code(){ 
            document.getElementById("imgcode").src="captcha.php"; 
        } 
    </script>
    


    <form name="form1" method="post" action="./checkcode.php">
	<center>
	帳號:<input type="text" name="id" size="10" maxlength="10" /> <br>
	密碼:<input type="text" name="pw" size="10" maxlength="10" /> <br>
	
	
        <p>請輸入下圖字樣：</p><p><img id="imgcode" src="captcha.php" onclick="refresh_code()" /><br />
           點擊圖片可以更換驗證碼
        </p>
        <input type="text" name="checkword" size="10" maxlength="10" />


        <div
    class="g-recaptcha"
    data-sitekey="6LcU_REgAAAAAMxz6hjVSeKOH_iXwgBbz1kkW-5Q"
    data-theme="light" data-size="normal"
    data-callback="verify"
    data-expired-callback="expired"
    data-error-callback="error">
</div>


        <input type="submit" name="Submit" value="送出" />
		</center>
    </form>