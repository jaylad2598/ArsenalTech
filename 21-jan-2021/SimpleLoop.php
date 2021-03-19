
<?php

    $str = "abc";
    $str1= "xyz";
    $i =1;
    $x = 1;
    while($i<=9)
    {
        echo $str." ";
        $i++;
    }
    echo "<br>";
    do{
        echo $str1." ";
        $x++;
    }while($x<=9); 
    echo "<br>";
    for($i=0;$i<=9;$i++)
    {
        echo $i." ";
    }
    echo "<br>";
    for($a="A";$a<="F";$a++)
    {
        echo "Item $a ";
        echo "<br>";
    }
?>