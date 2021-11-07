<?php
    session_start();
    unset($_SESSION["id"]); //設置一個登出
    echo "登出成功...."; //只要按下就能夠登出
    echo "<meta http-equiv=REFRESH content='3; url=login.html  '>";
?>