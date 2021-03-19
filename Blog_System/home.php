<?php
    session_start();
    require "connection.php";
    $db = new Connection();
    $conn = $db->DBconnection();
    try{
        $query = $conn->prepare("select * from post");
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);
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
    <nav class="navbar navbar-light bg-light m-2 sticky-top">
        <a class="navbar-brand" href="home.php">Blog System</a>
        <div>
            <ul class="nav" style="margin-left: 750px">
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="post.php">Post</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
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
    <div class="row">
        <?php
        foreach($query->fetchALL() as $val)
        {
        ?>
            <div class="col-sm-4">
                <div class="card" style="width:400px;margin: 10px; margin-left: 10px">
                    <img class="card-img-top" src="images/<?php echo $val['image']?>" alt="Card image">
                    <div class="card-body">
                            <h4 class="card-title"><?php echo $val['post_title'] ?></h4>
                            <p class="card-text"><?php echo $val['post_summary'] ?></p>
                            <a href="viewpost.php?pid=<?php echo $val['post_id'] ?>" style="float: right;">View Post</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

</body>
</html>