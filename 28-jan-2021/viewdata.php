<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    $conn = new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die ("Connection Unsuccessfully...........".$conn->connect_error);
        }
            $query = "select * from register";
            $result = $conn->query($query);  
            
            $uid = $_SESSION['uid'];    


    if(isset($_POST['Delete']))
    {
        
        $uid=$_POST['Delete'];
        
        $query="delete from register where userid=$uid";  
        
        $result = $conn->query($query);  
        

        header("location:viewdata.php");
    }     

    if(isset($_POST['update']))
    {

        header("location:update.php?up=".$_POST['update']);
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
                    <td>User Id</td>
                    <td>User Name</td>
                    <td>Password</td>
                    <td>User Email</td>
                    <td>Gender </td>
                    <td>Contact</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>";

                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                        echo "<td>".$row['userid']."</td>";
                        echo "<td>".$row['username']."</td>";
                        echo "<td>".$row['password']."</td>";
                        echo "<td>".$row['useremail']."</td>";
                        echo "<td>".$row['gender']."</td>";
                        echo "<td>".$row['contact']."</td>";
                        echo "<td><button type='submit' name='Delete' value=".$row['userid'].">Delete</button></td>";
                        echo "<td><button type='submit' name='update' value=".$row['userid'].">Update</button></td>";
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