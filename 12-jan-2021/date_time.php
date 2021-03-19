<?php
    echo " " . date("Y/m/d") . "<br>";
    echo " " . date("Y.m.d") . "<br>";
    echo " " . date("Y-m-d") . "<br>";
    echo " " . date("l");

    echo "<br>";
    echo "The time is " . date("h:i:sa");
    echo "<br>";
    echo "The time is " . date("H:i:sa");
    echo "<br>";


    date_default_timezone_set("Asia/Kolkata");
    echo "The time is " . date("h:i:sa");
    echo "<br>";
    
    $d=mktime(12, 57, 54, 01, 11, 2020);
    echo "Date is " . date("Y-m-d h:i:sa", $d);
    echo "<br>";
    echo "<br>";



    $d=strtotime("01:00pm January 11 2021");
    echo "Date is " . date("Y-m-d h:i:sa", $d);
    echo "<br>";
    echo "<br>";


    $d=strtotime("yesterday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next monday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+6 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    echo "<br>";
?>
&copy; 2010-<?php echo date("Y")
    ?>

