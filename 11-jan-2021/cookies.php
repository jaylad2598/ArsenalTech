<?php
    $cookie_name = "Jay";
    $cookie_value = 0;
  
    if(isset($_COOKIE[$cookie_name])) 
    { 
      $_COOKIE[$cookie_name]++;
      echo "Cookie name :  " . $cookie_name ."";
      echo "<br>";
      echo "Counter is: " . $_COOKIE[$cookie_name];
      setcookie($cookie_name, $_COOKIE[$cookie_name], time() + 1260, "/"); // 86400 = 1 day
    } 
    else 
    {
      setcookie($cookie_name, $cookie_value, time() + 1260, "/"); // 86400 = 1 day
      echo "Cookkie Not Declare";
      
    }
?>