<?php
    if(isset($_POST['submit']))
    {
        $ct = $_POST['city'];

        echo  "Your favorite city is <b> $ct</b> where <b>$ct</b> is the input from the form...";
    }
?>