<?php
    session_start();
    unset($_SESSION["counter"]); //重置計數器
    echo "counter重置成功....";  //只要按下重置就會重置計數器並跳出重置成功
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>"; //重置完成後會跳回計數器頁面
?>    