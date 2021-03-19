<?php
    $wether=array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
?>

<html>

    <head>
        <style>
            p{
                margin-left:70px;
                margin-top:20px;
                font-family:"times new roman";
                font-size:15px;            }
        </style>
    </head>

    <body>
        <h1 style="margin-left:60px;margin-top:20px"><i>Weather Of This Month</i></h1>
        <p>
        At the beginning of the month <b><?php echo $wether[5]."  ".$wether[6]?></b><br>
        At the Sunsine Time there is a <b><?php echo $wether[1]."  ".$wether[2]?></b><br>
        At least we didn't get any <b><?php echo $wether[3]."  ".$wether[4] ?></b>
        </p>
    </body>
</html>