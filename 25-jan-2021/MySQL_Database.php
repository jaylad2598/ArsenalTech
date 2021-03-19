<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    $conn = new mysqli("$servername","$username","$password","$dbname");

    if($conn->connect_error)
    {
        die ("Connection Unsuccessfully...........".$conn->connect_error);
    }

    /* $query = "create table student(
        stdid int(3) AUTO_INCREMENT primary key,
        stdname varchar(20),
        stdemail varchar(30),
        mobile varchar(15)
    )";  */
 
    $stat=$conn->prepare("insert into student(stdname,stdemail,mobile) values(?,?,?)");

    $stat->bind_param("sss",$stdname,$stdemail,$mobile);
    
    $stdname = "Jay"; 
    $stdemail = "jaylad432@gmail.com";
    $mobile = "9874563204";
    $stat->execute();

    $stdname = "parth"; 
    $stdemail = "parth123@gmail.com";
    $mobile = "9874563204";
    $stat->execute();

    $stdname = "aman"; 
    $stdemail = "aman321@gmail.com";
    $mobile = "9874563204";
    $stat->execute(); 

    echo "New records created successfully";

    $stat->close();
    $conn->close();

?>
  
