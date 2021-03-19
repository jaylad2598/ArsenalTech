<?php
    session_start();
    require "connection.php";
    $db = new Connection();
    $conn = $db->DBconnection();

    if(isset($_REQUEST["cmtid"]))
    {
        try
        {
            $cmtid = $_REQUEST["cmtid"];
            $reply = $_REQUEST["reply"];
            $pid = $_POST["pid"];
            $uid = $_SESSION['userid'];

            $query = "insert into replycomment(reply_comment,comment_id,post_id,user_id) values('$reply','$cmtid','$pid','$uid')";
            $conn->exec($query);
        }
        catch(PDOException $e)
        {
            $e->getMessage();
        }
    }





?>