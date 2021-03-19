<?php
session_start();
require "connection.php";
$db = new Connection();
$conn = $db->DBconnection();


    if (!isset($_SESSION['userid']))
    {
        header('location: login.php');
    }

try
{
    $pid=$_REQUEST['up'];
    $stmt =$conn->prepare("select * from post where post_id=$pid");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $row = $stmt->fetch();
    $title = $row['post_title'];
    $summary = $row['post_summary'];
    $desc = $row['post_description'];
    $status = $row['status'];

    if(isset($_POST['update']))
    {
        $pid1 =$_REQUEST['up'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $desc = $_POST['description'];
        $status = $_POST['ddstatus'];
        $images = $_FILES['image']['name'];
        $updated_date = date('y-m-d');
        $img = "images/" . $_FILES["image"]["name"];
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $img))
        {
            $query =$conn->prepare("update post set post_title ='".$title."',post_summary ='".$summary."',post_description='".$desc."',status='".$status."',image='".$images."',updated_date='".$updated_date."' where post_id= '".$pid1."' ");
            $query->execute();
            header("location:blog.php");
        }
        else{
            echo "Image Not Uploaded......";
        }

    }
}
catch (PDOException $e)
{
    echo $e.getMessage();
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
                       placeholder="Enter Title" value="<?php echo $title ?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputTopic">Summary</label>
                <input type="text" class="form-control" name="summary" id="exampleInputName" aria-describedby="emailHelp"
                       placeholder="Enter Summary" value="<?php echo $summary ?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputDisc">Discription</label>
                <textarea class="form-control" name="description" rows="7" id="exampleInputEmail1" aria-describedby="emailHelp"
                          placeholder="Enter Discription" required><?php echo $desc ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputDisc">Status</label>
                <select class="form-control" name="ddstatus" value="<?php echo $status ?>">
                    <option value="Active" selected>Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputImage">Image</label>
                <input type="file" class="form-control" name="image" id="uploadimage" placeholder="iamge" required>
                Selected Image : <img src="images/<?php echo $row['image']?>" style="margin-top: 10px" width="80" height="80">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</body>
</html>
