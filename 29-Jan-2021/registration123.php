<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    if(isset($_POST['register']))
    {
        try
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

            /* $query = "create table student(
                stdid int(5) AUTO_INCREMENT primary key,
                stdname varchar(20),
                passwd varchar(30),
                email varchar(30),
                address varchar(50),
                city varchar(15),
                gender varchar(8),
                contact varchar(15)
            )"; */
            $var = true;
            $name = $_POST['stdname'];
            $pwd = $_POST['passwd'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $ct = $_POST['city'];
            $gender = $_POST['gender'];
            $contact = $_POST['contact'];

            $emailexp = "/^[a-zA-Z0-9_]+@(gmail|yahoo|outlook).(com|in)$/";
            if(!preg_match($emailexp,$email) == 1)
            {
                echo "Enter Valid Email..........";
                $var = false;
            }
            else
            {
                $mail = $email;
            }

            $cntexp = "/^[0-9]{10}$/";
            if(!preg_match($cntexp,$contact) == 1)
            {
                echo "Enter Only number in Contact Field............";
                $var = false;
            }
            else{
                $cont = $contact;
            }

            if($var == true)
            {
                $qry = $conn->prepare("select stdname,email from student where stdname !='".$name."' AND email !='".$email."'");
                $val = $qry->execute();
                $result = $qry->setFetchMode(PDO::FETCH_ASSOC);
                echo $result;
                
                if($result==0)
                {
                    echo "Username Or Email Already Exist.......";
                }
                else{
                    $query = "insert into student(stdname,passwd,email,address,city,gender,contact) values('$name','$pwd','$mail','$address','$ct','$gender','$contact')";
                    if($conn->exec($query))
                        header("location:Login.php");
                }
            }       
        }
        catch(PDOException $ex)
        {
            echo $ex.getMessage();
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
    <center>
        <form method="post" action="#">
            
            <table style="align:center" cellpadding=5px cellspacing=10px>
                <tr>
                    <td colspan="2"><h3>Registration Page</h3></td>
                </tr>
                <tr>
                    <td>Student Name: </td>
                    <td><input type="text" name="stdname" required></td>
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
                    <td>Address</td>
                    <td><textarea name="address" palceholder="Enter Address...." required></textarea></td>
                </tr>

                <tr>
                    <td>City : </td>
                    <td>
                        <select type="city" name="city">
                        
							<option value="Navsari" selected>Navsari</option>
							<option value="Surat">Surat</option>
							<option value="Ahmedabad">Ahmedabad</option>
                        </select>
                    </td>
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
        </center>
    </body>
</html>