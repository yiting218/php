<?php
    error_reporting(0);//禁用錯誤報告，不顯示錯誤
    session_start();//告訴系統準備開始使用
    if(!$_SESSION["id"]){
        echo "pless login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; 
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>logout</a>]<br>"; //設置一個登出按鈕
        $conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
        $result = mysqli_query($conn,"select * from bulletin");
        echo"<table border=1><tr><td>編號</td><td>佈告類型</td><td>標題</td><td>內容</td><td>發布時間</td></tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>";
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"];
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    }
?>