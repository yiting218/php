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
        #mysqli_connect()建立資料庫連結
        $conn=mysqli_connect("localhost","root","","mydb");
        #mysqli_query()從資料庫查詢資料
        #新增資料SQL命令:insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
        $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
        #echo $sql;
        if(!mysqli_query($conn,$sql)){ //回傳資料
            echo"新增命令錯誤"; //如果回傳資料不成功，顯示新增命令錯誤
        }
        else{
            echo"新增使用者成功，三秒鐘後回到網頁"; //如果新增成功，顯示新增使用者成功回到網頁
            echo"<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
            //跳轉網頁，自動跳轉到bulletin.php
        }
    }
   
?>