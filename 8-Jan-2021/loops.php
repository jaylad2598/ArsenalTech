<?php
    $a=1;
    $b=1;
    while($a <= 5)
    {
        echo "Number is &nbsp;$a";
        $a++;
        echo "<br>";
    }
    echo "<br>";

    do{
        echo "Number is :$b";
        $b++;
        echo "<br>";

    }while($b<=10);

    echo "<br>";

    $x=1;
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      }

    echo "<br>";
    $name = array("Jay", "Aman", "Parth", "Raj");
    foreach ($name as $nm) {
        echo "$nm <br>";
    }
    
    echo "<br>";

    for ($x = 10; $x < 20; $x++) 
    {
        if ($x == 16) 
        {
          break;
        }
        echo "The number is: $x <br>";
    }

    echo "<br>";
    echo "<br>";
    for ($x = 10; $x < 20; $x++) 
    {
        if ($x == 16) {
          continue;
        }
        echo "The number is: $x <br>";
    }

    
?>
