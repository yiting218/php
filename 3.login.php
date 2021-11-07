<?php
    if (($_POST["id"]=="john") && ($_POST["pwd"]=="john1234"))//if以及else是條件判斷 //&&是邏輯運算符 是AND的意思
        echo "welcome";    //如果輸入的id是john AND 輸入的pwd是john1234 就echo印出welcome  //||也是邏輯運算符 是OR的意思
    else                   
        echo "Login failure"; //如果輸入的id不是john AND 輸入的pwd不是john1234 就echo印出Login failure
?>    