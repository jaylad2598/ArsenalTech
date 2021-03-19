<html>
<head>
    <?php
        session_start();
    ?>
</head> 

<body>
<?php

    $_SESSION["firstname"] = "jay";
    $_SESSION["lastname"] = "lad";

    $fanme=$_SESSION["firstname"];
    $lname=$_SESSION["lastname"];

    echo $fanme;
    echo "<br>";
    echo $lname;
    echo "<br>";

    $_SESSION["firstname"] = "ram";

    $fanme=$_SESSION["firstname"];
    echo $fanme;

    session_unset();
    $fanme=$_SESSION["firstname"];
    echo $fanme;

?>
</body>
</html>