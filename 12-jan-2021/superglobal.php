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

    # php server
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";

?>