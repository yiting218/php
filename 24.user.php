<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0); //禁用錯誤報告，不顯示錯誤
        session_start(); //儲存於伺服器端，用在有會員登入或購物車功能，可記錄資料
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
            //refresh可以用來設定幾秒鐘後跳轉到某一個 URL 讓網頁在載入3秒後，自動跳轉到login.html
            //如果不加url參數則是定時刷新頁面的意思
        }
        else{   
            echo "<h1>使用者管理</h1>
            [<a href=user_add_form.php>新增使用者</a>][<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            //使用者管理，連結資料庫進行增、刪、改、查
            $conn=mysqli_connect("localhost","root","","mydb"); //mysqli_connect連結資料庫('資料庫主機','登入帳號','登入密碼','要開啟的資料庫名稱')
            $result=mysqli_query($conn, "select * from user"); //mysqli_query用來使用資料庫的語法(connection要連結的資料庫,query資料庫語法)
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>||<a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
                //修改或刪除資料
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>