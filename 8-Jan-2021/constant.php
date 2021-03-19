<?php
    define("Message","Welcome to ArsenalTech");
    echo Message;
    echo "<br>";

    define("MSG","Welcome to Ahmedabad",true);
    echo msg;
    echo "<br>";


    define("name",["Jay","Aman","Vijay"]);
    echo name[0];
    echo "<br>";

    define("text","Welcome to Surat",true);
    function demo()
    {
        echo text;
    }
    demo();

?>