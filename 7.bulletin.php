<?php
    #mysqli_connect()建立資料庫連結
    $conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
    #mysqli_query()從資料庫查詢資料
    $result = mysqli_query($conn,"select * from bulletin");
    #mysqli_fetch_array()從查詢出來的資料一筆一筆抓出來 //將資料呈現成表格的樣式
    echo"<table border=1><tr><td>編號</td><td>佈告類型</td>
    <td>標題</td><td>內容</td><td>發布時間</td></tr>";
    while($row = mysqli_fetch_array($result)){    //顯示資料
        echo "<tr><td>".$row["bid"]."</td><td> ".$row["type"].
        "</td><td>".$row["title"]."</td><td>".$row["content"].
        "</td><td>".$row["time"]."</td></tr>";
    }
    echo "</table>";
?>