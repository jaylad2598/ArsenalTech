<?php
    $a=20;
    $b=10;

    if($a==$b)
    {
        echo "$a and $b both are Same : ";
    }
    else{
        echo "$a and $b both are not Same : ";
    }

    echo "<br>";

    $a=50;
    $b=50;
    $c=70;

    if($a==$b && $a==$c)
    {
        echo "$a $b and $c All are Same :";
    }
    else if($b==$c)
    {
        echo "$b and $c both are Same : ";
    }
    else{
        echo "All value are Different : ";
    }

?>