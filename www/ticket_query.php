<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>php圖形驗證碼</title>
   
    <script>
        function refresh_code(){ 
            document.getElementById("imgcode").src="../captcha.php"; 
        } 
    </script>
 <script src='https://www.google.com/recaptcha/api.js'></script>

<?
 /**
 *  Google機器人驗證 
 *  @param string $token
 *  @return bool 
 */
function recaptchaCheck($token){
    if(!$token){
        echo "機器人驗證-未驗證";
        return false;
    }
​
    $secret_key = '貼上Private私鑰';
    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$token);
    $response_data = json_decode($response,true);
    if($response_data["success"]){
        echo "驗證成功";
        return True;
    }else{
        echo "機器人驗證-失敗";
        return False;
    }
}
?>
    


    <form name="form1" method="post" action="ticket_query2.php">
 <center>
 帳號:<input type="text" name="id" size="10" maxlength="10" /> <br>
 乘車日:<input type="date" name="mydate"> <br>
 <input type="submit" name="Submit" value="送出"/>
  </center>
    </form>