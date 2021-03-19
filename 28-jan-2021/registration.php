<?php
    if(isset($_POST['register']))
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
        /* $query = "create table register(
            userid int(5) AUTO_INCREMENT primary key,
            username varchar(20),
            password varchar(15),
            useremail varchar(30),
            gender varchar(7),
            contact varchar(15)
        )"; */
        $var = true;
        $uname = $_POST['username'];
        $pwd = $_POST['passwd'];
        $mail = $_POST['email'];
        $rdo = $_POST['gender'];
        $contact = $_POST['contact'];

        $emailexp = "/^[a-zA-Z0-9_]+@(gmail|yahoo|outlook).(com|in)$/";
        if(!preg_match($emailexp,$mail) == 1)
        {
            echo "Enter Valid Email..........";
            $var = false;
        }
        else
        {
            $umail = $mail;
        }

        $cntexp = "/^[0-9]{10}$/";
        if(!preg_match($cntexp,$contact) == 1)
        {
            echo "Enter Only number in Contact Field............";
            $var = false;
        }
        else{
            $cnt = $contact;
        }

        if($var == true)
        {
            $query = "insert into register(username,password,useremail,gender,contact) values('$uname','$pwd','$umail','$rdo','$cnt')";

            if($conn->query($query) === true)
            {
                header("location:login.php");
            }
            else{
                echo "Data not Insert Successfully......... ".$conn->error;
            }
        }
    }
?>

<html>
    <head>
        <title>Registration Page</title>
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
                    <td colspan="2"><h2>Registration Page</h2></td>
                </tr>
                <tr>
                    <td>User Name: </td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="passwd" required></td>
                </tr>

                <tr>
                    <td>Email : </td>
                    <td><input type="text" name="email" required></td>
                </tr>

                <tr>
                    <td>Gender : </td>
                    <td>
                        Male : <input type="radio" name="gender" value="Male" >
                        Female : <input type="radio" name="gender" value="Female" >
                    </td>
                </tr>

                <tr>
                    <td>Contact : </td>
                    <td><input type="text" name="contact" required></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <br>
                        <input type="submit" name="register" value="Sign Up">
                        <input type="reset" name="cancel" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>