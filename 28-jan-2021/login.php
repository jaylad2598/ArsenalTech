<?php
    session_start();
    if(isset($_POST['login']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb";

        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error)
        {
            die ("Connection Unsuccessfully...........".$conn->connect_error);
        }

        $uname = $_POST['username'];
        $pwd = $_POST['passwd'];

        $query = "select userid,username,password from register where username='$uname' and password='$pwd'";
        $result = $conn->query($query);
        $count = mysqli_num_rows($result);
        
        while($row = $result->fetch_assoc())
        {
            $_SESSION['uid'] = $row['userid'];
        }    

        if($count==1)
        {
                header("location:viewdata.php");
        }
        else
        {
            echo "Invalid Username and Password............. 2:38";
        }
    }
?>
<html>
    <head>
        <title>Login Page</title>

        <style>
            td{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <form method="post" action="#">
            
            <table style="align:center">
                <tr>
                    <td colspan="2"><h2>Login Page</h2></td>
                </tr>
                <tr>
                    <td>User Name: </td>
                    <td><input type="text" name="username" ></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="passwd" ></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <br>
                        <input type="submit" name="login" value="Login">
                        <input type="reset" name="cancel" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
    </body>

</html>