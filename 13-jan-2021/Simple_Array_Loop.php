<?php
    $city = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

    foreach($city as $ct)
    {
        echo " ".$ct." , ";
    }
    echo "<ul>";
    sort($city);
        foreach($city as $ct)
        {
            
            echo "<li>".$ct."</li>";
        }
    echo "</ul>";

    array_push($city,"Los Angeles", "Calcutta", "Osaka", "Beijing");

    echo "<ul>";
    rsort($city);
        foreach($city as $ct)
        {
            
            echo "<li>".$ct."</li>";
        }
    echo "</ul>";

?>
<html>
        <head>
            <title>Simple Array</title>
        </head>
</html>