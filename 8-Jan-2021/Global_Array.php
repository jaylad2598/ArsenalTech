<?php
    $ab = "Global Variable";
    function gbarray()
    {
        $a="Current Variable";

        echo "Variable in Currant Scope = " .$a;
        echo "<br>";
        echo "Variable in Global Scope = ".$GLOBALS["ab"];
    }

    gbarray();
?>