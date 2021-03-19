<?php
    session_start();
    require "connection.php";
    $db = new Connection();
    $conn = $db->DBconnection();

    if(isset($_REQUEST['cmtid']))
    {

        $pid = $_REQUEST['pid'];
        $uid = $_SESSION['userid'];
        $cmtid = $_REQUEST['cmtid'];

        $query = $conn->prepare("select * from replycomment where comment_id='".$cmtid."'");
        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);

        foreach($query->fetchALL() as $val)
        {
            echo "<p>".$val['reply_comment']."</p>";
        }
    }
?>
