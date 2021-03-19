<?php

function calarea($l,$w)
{
    $area =  $l * $w;
    $ans = "A rectangle of length $l and width $w has an area of $area where $l and $w are the arguments and $area is the result.";
    return $ans;
}
echo "Area Is ".calarea(10,20);

?>