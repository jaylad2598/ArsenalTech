<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("select * from student");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        if(isset($_POST['Delete']))
        {
            $sid=$_POST['Delete'];
            $query="delete from student where stdid=$sid"; 
            $conn->exec($query); 
            
            header("location:Studentdata.php");
        }  

        if(isset($_POST['update']))
        {
            header("location:updatestudent.php?up=".$_POST['update']);
        }
    }
    catch(PDOException $ex)
    {
        $ex->getMessage();
    }
?>

<html>
    <body>
        <div align=center>
            <form action="#" method="post">
            <?php
                echo "<table border=1px cellpadding=5px cellspacing=10px>";
                echo "<tr>
                    <td>Student Id</td>
                    <td>Student Name</td>
                    <td>Password </td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>City</td>
                    <td>Gender</td>
                    <td>Contact</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>";
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
                        echo "<td><button type='submit' name='Delete' value=".$v['stdid'].">Delete</button></td>";
                        echo "<td><button type='submit' name='update' value=".$v['stdid'].">Update</button></td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>
            </form>
        </div>
    </body>
</html>