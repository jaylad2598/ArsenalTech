<?php
session_start();
require "connection.php";
$db = new Connection();
$conn = $db->DBconnection();


if (!isset($_SESSION['userid']))
{
    header('location: login.php');
}
$pid = $_REQUEST['pid'];
    
if(isset($_REQUEST['pid']))
    {
        try
        { 
            $pid = $_REQUEST['pid'];
            $_SESSION['postid']=$pid;
            $query = $conn->prepare("select * from post where post_id='".$pid."'");
            $query->execute();
            $result = $query->setFetchMode(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex)
        {
            $ex->getMessage();
        }
    }
?>

<html>
<head>
    <title>Blog Page</title>
    <?php
    require "stylesheet.php";
    ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#comment").click(function() {
                $.ajax({    //
                    type: "POST",
                    url: "comment.php",
                    data: {pid :<?php echo $pid; ?> , cmt: $("#txtcomment").val()},
                    success: function(response){
                        $.ajax({    //
                            type: "POST",
                            url: "getcomment.php",
                            data: {pid :<?php echo $pid; ?>},
                           success: function(response){
                            $("#commentdata").empty();
                                $("#commentdata").prepend(response);
                                }
                            });
                        }
                    });
                 });
            $.ajax({    //
                    type: "POST",
                    url: "getcomment.php",
                    data: {pid :<?php echo $pid; ?>},

                    success: function(response){
                        $("#commentdata").prepend(response);
                    }
                });

            $("#like").click(function() {
                $.ajax({    //
                    type: "POST",
                    url: "post_like.php",
                    data: {pid :<?php echo $pid; ?> },
                    dataType: "html",

                    success: function(response){
                        $("#total").html(response);
                    }
                });
            });

            $("#divcomment").hide();
            $(document).ready(function(){
                $("#iconcomment").click(function(){
                    $("#divcomment").slideToggle("slow");
                });
            });

        });
    </script>



</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-light bg-light m-2 sticky-top">
        <a class="navbar-brand" href="home.php">Blog System</a>
        <div>
            <ul class="nav" style="margin-left: 750px">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
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
    <form action="#" method="post"> 
        <?php
            foreach($query->fetchALL() as $val)
            {
        ?>

            <div class="row">
                <div class="col-sm-5">
                    <img width="auto" class="circle" src="images/<?php echo $val['image']?>" style="margin-top: 30px" width="400" height="280">
                </div>

                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-8">
                            <p style="font-size: 20px">Title Is : <b><?php echo $val['post_title'] ?></b><br>
                        </div>

                        <div class="col-sm-4">
                            <p id="total"></p><i id="like" style="font-size:20px;float: right;margin-right:30px" href=""></i><br>
                            <?php
                            $stmt =$conn->prepare("select * from post_like where user_id=:uid AND post_id =:pid");
                            $stmt->bindParam(":uid",$_SESSION['userid']);
                            $stmt->bindParam(":pid",$pid);
                            $stmt->execute();
                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                            $result = $stmt->fetchALL();

                            if(count($result) > 0 ) {
                                if ($result[0]["user_id"] == $_SESSION['userid']) {
                                    echo "<script>document.getElementById('like').className = 'fa fa-heart text-danger'</script>";
                                }
                            } else {
                                echo "<script>document.getElementById('like').className = 'fa fa-heart text-dark'</script>";
                            }

                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">
                            <p style="float: right;">Last Updated Date : <b><?php echo $val['updated_date'] ?></b><br>
                        </div>
                    </div>

                       <div class="row">
                           <div class="col-sm-11">
                               <p style="margin-bottom: 20px"><?php echo $val['post_description'] ?></p><hr>
                           </div>
                       </div>

                    <i class='fa fa-comment' id='iconcomment' style='float: left;margin-left: 480px;font-size: 15px'>Comment</i><br>
                    <div class="row" id="divcomment" style="margin-bottom: 25px">
                        <div class="col-sm-10">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" id="txtcomment" placeholder="Write your Comment" aria-describedby="basic-addon2">
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" id="comment" name="comment" style="font-size:10px" type="button">Comment</button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <p id="commentdata"></p>

                        </div>
                    </div>




                    </div>
                </div>
            <?php
                }
            ?>
    </form>
</div>
</body>
</html>

