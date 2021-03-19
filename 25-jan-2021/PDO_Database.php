<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

        /* $query = "create table user(
            userid int(3) AUTO_INCREMENT primary key,
            username varchar(20),
            useremail varchar(30),
            mobile varchar(15)
        )"; */

        $stat = $conn->prepare("insert into user (username,useremail,mobile)values(:username,:useremail,:mobile)");

        $stat->bindParam(':username',$username);
        $stat->bindParam(':useremail',$useremail);
        $stat->bindParam(':mobile',$mobile);

        $username = "Jay"; 
        $useremail = "jaylad432@gmail.com";
        $mobile = "9874563204";
        $stat->execute();

        $username = "parth"; 
        $useremail = "parth123@gmail.com";
        $mobile = "9874563204";
        $stat->execute();

        $username = "aman"; 
        $useremail = "aman321@gmail.com";
        $mobile = "9874563204";
        $stat->execute(); 

        echo "Insert Data Successfully...........";
        
    }
    catch(PDOException $ex)
    {
        echo $e.getMessage();
    }
?>