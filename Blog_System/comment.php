<?php
    session_start();
    require "connection.php";
    $db = new Connection();
    $conn = $db->DBconnection();

    if(isset($_POST["pid"]))
    {   
        try
        {
            $comment = $_POST["cmt"];
            $pid = $_POST["pid"];
            $uid = $_SESSION['userid'];

            $query = "insert into comment(comment,post_id,user_id) values('$comment','$pid','$uid')";
            $conn->exec($query);
        }
        catch(PDOException $e)
        {
            $e->getMessage();
        }   
    }



    

?>