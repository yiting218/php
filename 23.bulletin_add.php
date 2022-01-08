<?php
    error_reporting(0); //禁用錯誤報告，不顯示錯誤
    session_start(); //儲存於伺服器端，用在有會員登入或購物車功能，可記錄資料
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
        //refresh可以用來設定幾秒鐘後跳轉到某一個 URL 讓網頁在載入3秒後，自動跳轉到login.php
        //如果不加url參數則是定時刷新頁面的意思 
    }
    else{
        $conn=myspli_connect("localhost","root","","mydb"); //mysqli_connect連結資料庫('資料庫主機','登入帳號','登入密碼','要開啟的資料庫名稱')
        $sql="insert into bulletin(title, content, type, time)
        values('{$_POST['title']}','{$_POST['content']}','{$_POST['type']}','{$_POST['time']}')";
        //insert into 是用來新增資料到某個資料表
        if(!mysqli_query($conn, $spl)){ //回傳資料
            echo "新增命令錯誤"; //回傳失敗顯示新增命令錯誤
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁"; //回傳資料成功，顯示新增佈告成功
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; //跳轉網頁，自動跳轉到bulletin.php
        }
    }
?>    