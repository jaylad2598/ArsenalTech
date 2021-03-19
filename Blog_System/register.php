<?php
    require "connection.php";
    $db = new Connection();
    $conn = $db->DBconnection();

    if(isset($_POST['register']))
    {
        try
        {
            $var = true;
            $dt = date('y-m-d');
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $uname = $_POST['username'];
            $email = $_POST['email'];
            $pwd = $_POST['passwd'];
            $contact = $_POST['contact'];

            $hash_pwd = password_hash($pwd,PASSWORD_DEFAULT);

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
            if($var == true)
            {
                $qry = $conn->prepare("select * from user where email !='".$email."' and passwd !='".$pwd."'  ");
                $val = $qry->execute();
                $result = $qry->setFetchMode(PDO::FETCH_ASSOC);

                if($result==0)
                {
                    echo "Email Already Exist.......";
                }
                else
                {
                    $query = "insert into user(create_date,first_name,last_name,username,email,passwd,mobile)values('$dt','$fname','$lname','$uname','$email','$hash_pwd','$contact')";
                    if($conn->exec($query))
                        header("location:Login.php");
                }
            }

        }
        catch (PDOException $e)
        {
            $e.getMessage();
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
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
</div>
<!---------Details----------->
<div class="container-fluid my-2 py-4" style="background-color:#e9ecef;">
    <div class="container w-50 p-5 mt-5">

        <form method="post" action="">
            <h2 class="py-2">Registration</h2>
            <div class="form-group">
                <label for="exampleInputFirstname">First Name</label>
                <input type="text" class="form-control" name="firstname" id="exampleInputFirstname" aria-describedby="emailHelp"
                       placeholder="Enter First Name">
            </div>

            <div class="form-group">
                <label for="exampleInputLastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="exampleInputLastname" aria-describedby="emailHelp"
                       placeholder="Enter last Name">
            </div>

            <div class="form-group">
                <label for="exampleInputUsername">User Name</label>
                <input type="text" class="form-control" name="username" id="exampleInputUsername" aria-describedby="emailHelp"
                       placeholder="Enter User Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="passwd" id="exampleInputPassword1" placeholder="Enter Password">
            </div>

            <div class="form-group">
                <label for="exampleInputContact">Mobile</label>
                <input type="number" class="form-control" name="contact" id="exampleInputnumber" placeholder="Enter Mobile Number">
            </div>

            <a>Don't Have a Account ? <a href="Register.php">Sign Up</a></a>
            <a style="float: right"  href="forgotpasswd.php">Forgot Password </a><br><br>
            <button type="submit" name="register" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</div>
</body>
</html>