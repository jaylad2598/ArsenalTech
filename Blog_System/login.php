<?php
require "connection.php";
$db = new Connection();
$conn = $db->DBconnection();
session_start();
if(isset($_POST['login']))
{
    try
    {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $query = $conn->prepare("select * from user where email='$email'");
        $query->execute();
        $rw = $query->fetch(PDO::FETCH_ASSOC);
        $ps1 = $rw['passwd'];

        $passwd = password_verify($pwd,$ps1);


        if($email == $rw["email"])
        {
            if($passwd == $rw["passwd"])
            {
                $_SESSION['userid']=$rw['user_id'];
                header("location:home.php");
            }
            else
            {
                echo "Invalid Password..........";
            }
        }
        else
        {
            echo "Invalid Email..........";
        }
    }
    catch(PDOException $e)
    {
        echo $e.getMessage();
    }
}
?>
<html>
<head>
    <title>Blog Page</title>
    <?php
    require "stylesheet.php";
    ?>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-light bg-light m-2 sticky-top">
        <a class="navbar-brand" href="home.php">Blog System</a>
        <div>
            <ul class="nav" style="margin-left: 750px">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>
</div>
<!---------Details----------->
<div class="container-fluid my-2 py-4" style="background-color:#e9ecef;height:100%;">
    <div class="container w-50 p-5 mt-5">

        <form method="post" action="">
            <h2 class="py-2">Login</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Password">
            </div>
            <a>Don't Have a Account ? <a href="Register.php">Sign Up</a></a>
            <a style="float: right"  href="forgotpasswd.php">Forgot Password </a><br><br>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>

</body>
</html>
