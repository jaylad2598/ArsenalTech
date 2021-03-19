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
    
        if(isset($_REQUEST['insert']))
        {
            $uid1=$_REQUEST['up'];
            $uname1 = $_POST['username'];
            
            $pwd1 = $_POST['passwd'];
            
            $umail1 = $_POST['email'];
            
            $rdo1 = $_POST['gender'];
            
            $contact1 = $_POST['contact'];
            
            //$query = "update register set username='.$uname.',password='.$pwd.',useremail='.$email.',gender='.$rdo.',contact='.$contact.' where userid='.$uid.'";
            $sql = "UPDATE `register` SET `username`='".$uname1."',`password`='".$pwd1."',`useremail`='".$umail1."',`gender`='".$rdo1."',`contact`='".$contact1."' WHERE userid='".$uid1."'";
            echo $sql;
           
            

            if($conn->query($sql) === TRUE)
            {
                header("location:viewdata.php");
            }
            else
            {
                echo "Data Not Updated..............";
            }
        }

        $uid=$_REQUEST['up'];
        $query = "select username,password,useremail,gender,contact from register where userid=$uid";
        $result = $conn->query($query);
    
        $row = $result->fetch_assoc();
            
                $uname = $row['username'];
                $pwd = $row['password'];
                $useremail = $row['useremail'];
                $gender = $row['gender'];
                $contact = $row['contact'];
?>

<html>
    <head>
        <title>Update Page</title>
        
    </head>
    <body>
        <center>
        <form method="post" action="#">
            <table>
                <tr>
                    <td colspan="2"><h2>Update Page</h2></td>
                </tr>
                <tr>
                    <td>User Name: </td>
                    <td><input type="text" name="username" value="<?php echo $uname ?>" ></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="text" name="passwd" value="<?php echo $pwd ?>" ></td>
                </tr>

                <tr>
                    <td>Email : </td>
                    <td><input type="text" name="email" value="<?php echo $useremail ?>" ></td>
                </tr>

                <tr>
                    <td>Gender : </td>
                    <td>
                        Male : <input type="radio" selected name="gender" value="Male" >
                        Female : <input type="radio" name="gender" value="Female" >
                    </td>
                </tr>

                <tr>
                    <td>Contact : </td>
                    <td><input type="text" name="contact" value="<?php echo $contact ?>" ></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <br>
                        <input type="submit" name="insert" value="Insert">
                        <input type="reset" name="cancel" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
        <center>
    </body>
</html>