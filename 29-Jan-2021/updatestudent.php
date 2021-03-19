<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sid=$_REQUEST['up'];
        $stmt =$conn->prepare("select stdname,passwd,email,address,city,gender,contact from student where stdid=$sid");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $row = $stmt->fetch();
                $sname = $row['stdname'];
                $pwd = $row['passwd'];
                $semail = $row['email'];
                $add = $row['address'];
                $ct = $row['city'];
                $gender = $row['gender'];
                $contact = $row['contact'];

        if(isset($_POST['insert']))
        {
                $sid1=$_REQUEST['up'];
                $sname1 = $_POST['stdname'];
                $pwd1 = $_POST['passwd'];
                $smail1 = $_POST['email'];
                $add1 = $_POST['address'];
                $ct1 = $_POST['city'];
                $rdo1 = $_POST['gender'];
                $contact1 = $_POST['contact'];

                $query =$conn->prepare("update student set stdname='".$sname1."' , passwd='".$pwd1."' , email='".$smail1."' , address='".$add1."' ,city='".$ct1."' , gender='".$rdo1."' , contact='".$contact1."' where stdid= '".$sid1."'");
                $query->execute();
                header("location:studentdata.php");
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }

?>

<html>
    <head>
        <title>Update Page</title>
        
    </head>
    <body>
        <center>
        <form method="post" action="#">
            
            <table style="align:center" cellpadding=5px cellspacing=10px>
                <tr>
                    <td colspan="2"><h3>Update Page</h3></td>
                </tr>
                <tr>
                    <td>Student Name: </td>
                    <td><input type="text" name="stdname" value="<?php echo $sname ?>" required></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="text" name="passwd" value="<?php echo $pwd ?>" required></td>
                </tr>

                <tr>
                    <td>Email : </td>
                    <td><input type="text" name="email" value="<?php echo $semail ?>" required></td>
                </tr>


                <tr>
                    <td>Address</td>
                    <td><textarea name="address" required><?php echo $add; ?></textarea></td>
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
                        Male : <input type="radio" name="gender" value="Male" <?php if($row['gender']=="Male"){echo "checked";}?> >
                        Female : <input type="radio" name="gender" value="Female" <?php if($row['gender']=="Female"){echo "checked";}?> >
                    </td>
                </tr>

                <tr>
                    <td>Contact : </td>
                    <td><input type="text" name="contact" value="<?php echo $contact ?>" required></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <br>
                        <input type="submit" name="insert" value="Sign Up">
                        <input type="reset" name="cancel" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
        <center>
    </body>
</html>