<?php
    error_reporting(0); //禁用錯誤報告，不顯示錯誤
    session_start(); //儲存於伺服器端，用在有會員登入或購物車功能，可記錄資料
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
        //refresh可以用來設定幾秒鐘後跳轉到某一個 URL 讓網頁在載入3秒後，自動跳轉到login.html
        //如果不加url參數則是定時刷新頁面的意思
    }
    else{
        $conn=mysqli_connect("localhost","root","","mydb");//mysqli_connect連結資料庫('資料庫主機','登入帳號','登入密碼','要開啟的資料庫名稱')
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
        $checked1="";
        $checked2="";
        $checked3="";
        if($row['type']==1)
            $checked1="checked";
        if($row['type']==2)
            $checked2="checked";
        if($row['type']==3)
            $checked3="checked";

        //checked 屬性規定在頁面加載時應該被預先選定的input元素    
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_edit.php>
                    報告編號:{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標   題:<input type=text name=title value={$row['title']}><br>
                    內   容:<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型:<input type=radio name=type value=1 {$checked1}>系上公告
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間:<input type=date name=time value={$row['time']}<p></p>
                    <input type=submit value=新增佈告><input type=reset value=清除>
                </form> 
            </body>
        </html>
        "; 
    }               
?>    