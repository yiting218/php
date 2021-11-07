<?php //儲存於伺服器端 不用擔心用戶禁用session的問題 但計錄檔案的負荷由伺服器承擔
    session_start(); //使用session來記錄資訊前 要先用session_start()告訴系統準備開始使用
    if(!isset($_SESSION["counter"])) //設定一個計數器
        $_SESSION["counter"]=1; //給計數器一個值
    else
        $_SESSION["counter"]++; //每跳進網頁計數器就增加一次

    echo "counter=".$_SESSION["counter"]; //印出計數器的數字
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; //設置一個重置計數器的 只要按下就會重置計數器 從1開始

?>