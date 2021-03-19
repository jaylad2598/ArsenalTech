<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("Connection Not Create Successfully.....".$conn->connect_error);
    }

    $query = "create table Employee(
        empid int(3) AUTO_INCREMENT primary key,
        empname varchar(20),
        empemail varchar(30),
        salary varchar(10)
    )";

    $query = "insert into employee values(1,'jay','jay123@gmail.com','50000')"; 

    if(mysqli_query($conn,$query))
    {
        $last_id = mysqli_insert_id($conn);
        echo "Insert Data Successfully............".$last_id;
    }
    else
    {
        echo "Insert Data Not Successfully.........".$conn->error;
    }
?>