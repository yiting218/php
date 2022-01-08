<html>
    <head><title>新增使用者</title></head>
    <body>
<?php
    error_reporting(0); //禁用錯誤報告，不顯示錯誤
    session_start(); //儲存於伺服器端，用在有會員登入或購物車功能，可記錄資料
    if(!$_SESSION[id]){
        echo"請登入帳號";
        echo"<meta http-equiv=REFRESH content='3, url=login.html'>";
        //refresh可以用來設定幾秒鐘後跳轉到某一個 URL 讓網頁在載入3秒後，自動跳轉到login.html
        //如果不加url參數則是定時刷新頁面的意思
    }
    else{
        echo "
            <form action=user_add.php method=post> 
               帳號:<input type=text name=id><br>
               密碼:<input type=text name=pwd><p></p>
               <input type=submit value=新增><input type=reset value=清除>
            </form>
        ";
        //Action是用來定義提交資料，要交的資料要送去哪
        //輸入id以及password
        //submit提交新增資料
        //reset重啟清除資料
        //資料送出後可新增使用者
    }    
?>        
    </body>
</html>