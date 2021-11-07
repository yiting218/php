<?php
    #mysqli_connect()建立資料庫連結
    $conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
    #mysqli_query()從資料庫查詢資料
    $result = mysqli_query($conn,"select * from user");
    #mysqli_fetch_array()從查詢出來的資料一筆一筆抓出來
    while($row = mysqli_fetch_array($result){
        echo $row["id"]." ".$row["pwd"]."<br>";
    }
    //while迴圈當有重複性值的程式碼而且要執行很多次，就可以使用迴圈可以省去重複寫程式碼的工作
    //while迴圈是當條件符合，while就會一直執行，直到不符合條件或者是跳出while迴圈的時候就會停止
?>