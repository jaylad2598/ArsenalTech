<?php
    session_start();
    $fnm = $_SESSION['fname'];
    $lnm = $_SESSION['lname'];
    $temp = "Value is :  ".$fnm." 123".$lnm;
    if(strtolower($fnm) == "test" || (( strtolower($lnm) == "test") ? $temp = "Value is :  ".$fnm.$lnm." 123" : $temp = "Value is :  ".$fnm." 123".$lnm))
    {
        echo $temp;
    }
    else
    {  
        echo "Value is :  ".$fnm."  ".$lnm;
    }
?>