<?php
    $cookie_name = "name";
    $cookie_value = "Jay Lad ";
    setcookie($cookie_name, $cookie_value, time() + 60, "/"); // 86400 = 1 day

    if(isset($_COOKIE[$cookie_name])) 
    {
      echo "Cookie name :  " . $cookie_name ."";
      echo "<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
    } 
    else 
    {
      echo "Cookkie Not Declare";
      
    }
    setcookie($cookie_name,"",time() -60);
    echo "<br>";
    echo "". $_COOKIE[$cookie_name];

?>