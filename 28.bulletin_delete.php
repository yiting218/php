<?php
    error_reporting(0); //禁用錯誤報告，不顯示錯誤
    session_start(); //儲存於伺服器端，用在有會員登入或購物車功能，可記錄資料
    if(!$_SESSION["id"]){
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3,url=login.html'>";
        //refresh可以用來設定幾秒鐘後跳轉到某一個 URL 讓網頁在載入3秒後，自動跳轉到login.php
        //如果不加url參數則是定時刷新頁面的意思
    }
    else{
        $conn=mysqli_connect("localhost","root","","mydb"); //mysqli_connect連結資料庫('資料庫主機','登入帳號','登入密碼','要開啟的資料庫名稱')
        $sql="delete from bulletin where bid='{$_GET[bid]}'"; //delete form 是用來刪除資料表中的資料，where是刪除選擇的某筆資料
        #echo $sql;
        if(!mysqli_query($conn,$sql)){ //回傳資料
            echo "佈告刪除錯誤"; //如果回傳資料不成功，顯示佈告刪除錯誤
        }else{
            echo "佈告刪除成功"; //如果回傳資料成功，顯示佈告刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        //跳轉網頁，自動跳轉到bulletin.php
    }
?>    