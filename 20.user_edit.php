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
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){ //更新修改後資料資料
            echo "修改錯誤"; //如資料修改失敗顯示修改錯誤並在3秒後跳轉至user.php
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
        }else{
            echo "修改成功，三秒鐘後回到網頁"; //如資料修改成功顯示修改成功並在3秒後跳轉至user.php
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
        }
    }
?>