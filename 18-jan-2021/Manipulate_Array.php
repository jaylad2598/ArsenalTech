<?php
    $temp = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 47, 63, 79, 78, 67, 72, 73, 80, 79, 45, 72, 75, 77, 73, 78, 82, 85, 89, 83);

    $avg = array_sum($temp)/count($temp);
    echo "Average is : ".$avg;
    echo "<br>";

    sort($temp);
    for($i=1;$i<=5;$i++)
    {   
        $far = $temp[$i];
        $celsius = (($far-32)*5)/9;
        echo "<br>";
        echo "Warmest High Temperatures is : ".$temp[$i]." And Celsius is ".round($celsius,2);
    }
    echo "<br>";
    rsort($temp);
    for($i=1;$i<=5;$i++)
    {   
        $far = $temp[$i];
        $celsius = (($far-32)*5)/9;
        echo "<br>";
        echo "Coolest High Temperatures is : ".$temp[$i]." And Celsius is ".round($celsius,2);
    }

?>

