<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_POST['login']))
        {
            $stdname = $_POST['stdname'];
            $pwd = $_POST['passwd'];

            $query = $conn->prepare("select stdid,stdname,passwd from student where stdname='$sname' and passwd='$pwd'");
            $query->execute();

            if($query)
            {
                header("location:studentdata.php");
            }
            else{
                echo "Invalid user Name and Password..........";
            }
        }
    }
    catch(PDOException $ex)
    {
        $ex->getMessage();
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
                    <td><input type="text" name="stdname" ></td>
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