<?php
    session_start();
    $fnm = trim(strtolower($_SESSION['fname']));
    $lnm = trim(strtolower($_SESSION['lname']));
    
    if($fnm == "test"  || $lnm == "test")
    {
        if(strtolower($fnm) == "test" )
            echo "Value is :  ".$fnm." 123 ".$lnm;
        else    
        echo "Value is :  ".$fnm.$lnm." 123 ";
    }
    else
    {  
        echo "Value is :  ".$fnm."  ".$lnm;
    }
    
?>