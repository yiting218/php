<html>
    <head><title>新增佈告</title></head>
    <body>
    <?php
        error_reporting(0); //禁用錯誤報告，不顯示錯誤
        session_start(); //儲存於伺服器端，用在有會員登入或購物車功能，可記錄資料
        if(!$_SESSION["id"]){
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3,url=login.html'>";
            //refresh可以用來設定幾秒鐘後跳轉到某一個 URL 讓網頁在載入3秒後，自動跳轉到login.html
            //如果不加url參數則是定時刷新頁面的意思
        }
        else{
            echo "
            <form method=post action=bulletin_add.php>
                標   題:<input type=text name=title><br>
                內   容:<br><textarea name=content rows=20 cols=20></textarea><br>
                佈告類型:<input type=radio name=type value=1>系上公告
                        <input type=radio name=type value=2>獲獎資訊
                        <input type=radio name=type value=3>徵才資訊<br>
                發布時間:<input type=date name=time><p></p>
                <input type=submit value=新增佈告><input type=reset value=清除>
            </form> 
            ";
            //textarea是一個多行純文本編輯物件，可以輸入一段長的、不限格式的文本
            //新增佈告資料新增在bulletin_add.php
        }   
        ?>
    </body>
</html>