<html>
    <head><title>修改使用者</title></head>
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
            $conn=mysqli_connect("localhost","root","","mydb"); //mysqli_connect連結資料庫('資料庫主機','登入帳號','登入密碼','要開啟的資料庫名稱')
            $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); //mysqli_query用來使用資料庫的語法(connection要連結的資料庫,query資料庫語法)
            $row=mysqli_fetch_array($result); //從結果中取得作為關聯數組
            echo "
            <form method=post action=user_edit.php>
                <input type=hidden name=id value={$row['id']}>
               帳號:{$row['id']}<br>
               密碼:<input type=text name=pwd value={$row['id']}><p></p>
               <input type=submit value=修改>
            </form>
        ";
        //action提交資料到user_edit.php
        //選擇要修改的使用者修改資料
        }
        ?>
    </body>
</html>