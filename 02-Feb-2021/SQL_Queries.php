<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $stmt = $conn->prepare("select * from student where stdname LIKE 'a%'");
        // $stmt = $conn->prepare("select * from student where stdname LIKE '%a'");
        // $stmt = $conn->prepare("select * from student where stdname LIKE '%d%'");
        // $stmt = $conn->prepare("select * from student where stdname LIKE '_a%'");
        // $stmt = $conn->prepare("select * from student where stdname LIKE 'a__%'");
        // $stmt = $conn->prepare("select * from student where stdname LIKE 'p%h'");
        // $stmt = $conn->prepare("select * from student where stdname NOT LIKE 'a%'");
        // $stmt = $conn->prepare("select * from student where stdname LIKE 'par%'");
        // $stmt = $conn->prepare("select * from student where stdname LIKE '%ma%'");
        // $stmt = $conn->prepare("select * from student where city LIKE '[Nas]%'"); Not Perform
        // $stmt = $conn->prepare("select * from student where city LIKE '[a-c]%'");
        // $stmt = $conn->prepare("select * from student where city IN('Navsari')");
        // $stmt = $conn->prepare("select stdname from student where city IN(select city from supplier)");
        // $stmt = $conn->prepare("select * from sample where age BETWEEN 20 AND 30");
        // $stmt = $conn->prepare("select * from sample where age NOT BETWEEN 20 AND 30");
        // $stmt = $conn->prepare("select * from student where stdid BETWEEN '1' AND '5' ORDER BY stdid ");
        //  $stmt = $conn->prepare("select * from student where stdid NOT BETWEEN 11 AND 15 ORDER BY stdid ");

        // select * FROM customer ORDER BY customerid LIMIT 1 OFFSET 5




        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    }
    catch(PDOException $ex)
    {
        echo $ex.getMessage();
    }
?>

<html>
    <body>
    <?php
        echo "<table border=1px cellpadding=5px cellspacing=10px>";
       /*  echo "<tr>
            <td>Student Id</td>
            <td>Student Name</td>
            <td>Password </td>
            <td>Email</td>
            <td>Address</td>
            <td>City</td>
            <td>Gender</td>
            <td>Contact</td>
        </tr>"; */
         foreach($stmt->fetchAll() as $k=>$v)
        {
            echo "<tr>";
            echo "<td>".$v['stdid']."</td>";
            echo "<td>".$v['stdname']."</td>";
            echo "<td>".$v['passwd']."</td>";
            echo "<td>".$v['email']."</td>";
            echo "<td>".$v['address']."</td>";
            echo "<td>".$v['city']."</td>";
            echo "<td>".$v['gender']."</td>";
            echo "<td>".$v['contact']."</td>";
        echo "</tr>";
        } 

          /* foreach($stmt->fetchAll() as $k=>$v)
        {
            echo "<tr>";
            echo "<td>".$v['id']."</td>";
            echo "<td>".$v['name']."</td>";
            echo "<td>".$v['age']."</td>";
            
        echo "</tr>";
        } */  
        echo "</table>";
    ?>
    </body>
</html>