<?php
    #mysqli_connect()建立資料庫連結
    $conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );//mysqli_connect連結資料庫('資料庫主機','登入帳號','登入密碼','要開啟的資料庫名稱')
    #mysqli_query()從資料庫查詢資料
    $result = mysqli_query($conn,"select * from user");//mysqli_query用來使用資料庫的語法(connection要連結的資料庫,query資料庫語法)
    #mysqli_fetch_array()從查詢出來的資料一筆一筆抓出來
    $row = mysqli_fetch_array($result); //從結果中取得作為關聯數組
    echo $row["id"]." ".$row["pwd"];
    echo "<br>";
    $row = mysqli_fetch_array($result);
    echo $row["id"]." ".$row["pwd"];
?>