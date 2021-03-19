<?php
session_start();
require "connection.php";
$db = new Connection();
$conn = $db->DBconnection();


if (!isset($_SESSION['userid']))
{
    header('location: login.php');
}
if(isset($_POST['register']))
{
    try
    {
        $create_date = date('y-m-d');
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $desc = $_POST['description'];
        $desc =str_replace("'","''",$desc);
        $status = $_POST['ddstatus'];
        $images = $_FILES['image']['name'];
        $updated_date = date('y-m-d');
        $userid = $_SESSION['userid'];
        $img = "images/" . $_FILES["image"]["name"];
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $img))
        {
            $query = "insert into post(create_date,post_title,post_summary,post_description,status,image,updated_date,user_id)values('$create_date','$title','$summary','$desc','$status','$images','$updated_date','$userid')";
            if($conn->exec($query))
            {
                header("location:home.php");
            }
        }
        else
        {
            echo "Image Not Upload !!";
        }
    }
    catch (PDOException $e)
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
    <div class="container w-50 p-5 mt-5">

        <form method="post" action="#" enctype="multipart/form-data">
            <h2 class="py-2">Post Details</h2>
            <div class="form-group">
                <label for="exampleInputTopic">Title</label>
                <input type="text" class="form-control" name="title" id="exampleInputName" aria-describedby="emailHelp"
                       placeholder="Enter Title" required>
            </div>

            <div class="form-group">
                <label for="exampleInputTopic">Summar</label>
                <input type="text" class="form-control" name="summary" id="exampleInputName" aria-describedby="emailHelp"
                       placeholder="Enter Summary" required>
            </div>

            <div class="form-group">
                <label for="exampleInputDisc">Discription</label>
                <textarea class="form-control" name="description" rows="7" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter Discription" required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputDisc">Status</label>
                <select class="form-control" name="ddstatus">
                    <option value="Active" selected>Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputImage">Image</label>
                <input type="file" class="form-control" name="image" id="uploadimage" placeholder="iamge" required>
            </div>
            <button type="submit" name="register" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
