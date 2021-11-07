<?php
    #mysqli_connect() 建立資料庫連結
    $conn=mysqli_connect("localhost","root","","mydb");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn,"select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $login=FALSE;
    while($row=mysqli_fetch_array($result)){
      if(($_POST["id"]==$row["id"])&&($_POST["pwd"]==$row["pwd"])){
         $login=TRUE;
      }
   }
   if($login==TRUE){                  //設置一個登入系統能運用在許多網站上
      session_start();
      $_SESSION["id"]=$_POST["id"];
      echo "Welcome!";
      echo "<meta http-equiv=REFRESH content='3,url=11.bulletin.php'>";
      //refresh可以用來設定幾秒鐘後跳轉到某一個 URL 讓網頁在載入3秒後，自動跳轉到11.bulletin.php
      //如果不加url參數則是定時刷新頁面的意思
   }
       
   else{
      echo "ID/PWD Wrong!";
      echo "<meta http-equiv=REFRESH content='3,url=login.html'>";
   }
?>
       