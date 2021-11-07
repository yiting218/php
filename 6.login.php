<?php
    $conn=mysqli_connect("localhost","root","","mydb");
    $result=mysqli_query($conn,"select * from user");
    $login=FALSE; //如果輸入的id和pwd錯誤就無法進入直到輸入是正確的為止
    while($row=mysqli_fetch_array($result)){
        if(($_POST["id"]==$row["id"])&&($_POST["pwd"]==$row["pwd"]))
           $login=TRUE;
    }
    if($login==TRUE) //如果是正確的就印出welcome
       echo "Welcome!";
    else             //如果是錯誤的就印出ID/PWD Wrong
       echo "ID/PWD Wrong!";