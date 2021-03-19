<?php
    $colors = array("red", "green", array("orange", "maroon"), "blue", "yellow",array("purple", "brown"));
    $str = "Is This Array";

    if(is_array($colors))
    {
        echo "This is Array";
    }
    else{
        echo "This is Not Array";
    }
?>