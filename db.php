<?php
    $sn ="localhost:3310";
    $un="root";
    $pw="";
    $db="details";

    $con = mysqli_connect($sn,$un,$pw,$db);
    if(mysqli_connect_errno())
    {
        echo "fail";
        exit();
    }
    else 
    {
        echo ".";
    }
?>