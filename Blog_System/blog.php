<?php
session_start();
require "connection.php";
$db = new Connection();
$conn = $db->DBconnection();

if (!isset($_SESSION['userid']))
{
    header('location: login.php');
}
try{
    $uid = $_SESSION['userid'];
    $query = $conn->prepare("select * from post where user_id='".$uid."'");
    $query->execute();
    $result = $query->setFetchMode(PDO::FETCH_ASSOC);

    if(isset($_POST['Delete']))
    {
        $pid=$_POST['Delete'];
        $query="delete from post where post_id=$pid";
        $conn->exec($query);
        header("location:blog.php");
    }

    if(isset($_POST['update']))
    {
        header("location:updateblog.php?up=".$_POST['update']);
    }
}
catch(PDOException $ex)
{
    $ex->getMessage();
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
    <nav class="navbar navbar-light bg-light m-2 fixed-top">
        <a class="navbar-brand" href="home.php">Blog System</a>
        <div>
            <ul class="nav" style="margin-left: 750px">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="post.php">Post</a></li>
                <?php
                    if (isset($_SESSION['userid']))
                    {
                        echo "<a class='btn btn-danger' href='logout.php'>Logout</a></li>";
                    }
                    ?>
            </ul>
        </div>
    </nav>
</div>
<!---------Details----------->
<div class="container-fluid my-2 py-4" style="background-color:#e9ecef;">
    <form action="#" method="post">
    <?php
    foreach($query->fetchALL() as $val)
    {
        ?>
        <div class="row">
            <div class="col-sm-4" style="margin-top: 10px;margin-top: 5px">
                <img width="auto" class="rounded-circle" src="images/<?php echo $val['image']?>" width="400" height="250">
            </div>

            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8">
                        <p style="font-size: 20px">Title Is : <b><?php echo $val['post_title'] ?></b><br>
                    </div>
                    <div class="col-sm-4">

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <p style="float: right;">Last Updated Date : <b><?php echo $val['updated_date'] ?></b><br>
                    </div>
                </div>

                <p><?php echo $val['post_description'] ?></p>
                
                    <button type='submit' class="btn btn-danger" name='Delete' value="<?php echo $val['post_id'] ?>" style="float: right">Delete</button>
                    <button type='submit' class="btn btn-primary" name='update' value="<?php echo $val['post_id'] ?>" style="float: right;margin-right: 10px">Update</button>
            </div>
        </div>

        <hr>
        <?php
    }
    ?>
    </form>
</div>
</body>
</html>
