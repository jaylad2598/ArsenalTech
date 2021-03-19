<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practical";
    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }
?>