<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

        $stmt = $conn->query("SELECT * FROM users");
        $data = $stmt->fetchAll();
        
             
        $sid = $_SESSION['sid']; 

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
        echo $ex->getMessage();
    }
?>

<html>
    <body>
    <div align=center>
        <form action="#" method="post">
            <h2 style='text-align:center'>View Data</h2>
        <?php
            if(isset($result) && $result->num_rows>0)
            {
                echo "<table border=1px cellpadding=5px cellspacing=10px><tr>
                    <td>Student Id</td>
                    <td>Student Name</td>
                    <td>Password</td>
                    <td>Student Email</td>
                    <td>Address </td>
                    <td>City</td>
                    <td>Gender</td>
                    <td>Contact</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>";

                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                        echo "<td>".$row['stdid']."</td>";
                        echo "<td>".$row['stdname']."</td>";
                        echo "<td>".$row['passwd']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['city']."</td>";
                        echo "<td>".$row['gender']."</td>";
                        echo "<td>".$row['contact']."</td>";
                        echo "<td><button type='submit' name='Delete' value=".$row['stdid'].">Delete</button></td>";
                        echo "<td><button type='submit' name='update' value=".$row['stdid'].">Update</button></td>";
                    echo "</tr>";
                }
            echo "</table>";    
            }
            else
            {
                echo "No Data in Database";
            }     
        ?>
        </form>
        </div>
    </body>
</html>