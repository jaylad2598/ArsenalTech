<?php
session_start();
require "connection.php";
$db = new Connection();
$conn = $db->DBconnection();

$pid = $_REQUEST['pid'];
    try
    {
        $lk = 1;
        $pid = $_REQUEST['pid'];
        $uid = $_SESSION['userid'];

        $stmt =$conn->prepare("select * from post_like where user_id=:uid AND post_id =:pid");
        $stmt->bindParam(":uid",$uid);
        $stmt->bindParam(":pid",$pid);
        $stmt->execute();
         $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchALL();

        $qry = $conn->prepare("SELECT COUNT(post_id) from post_like where post_id = $pid");
        $cnt = $qry->execute();


        if(count($result) == 0){

            $query = $conn->prepare("insert into post_like(like_post,user_id,post_id) values('$lk','$uid','$pid')");
            $query->execute();

            if(isset($query))
            {
                echo "<script>document.getElementById('like').className = 'fa fa-heart text-danger'</script>";
            }
        }
        else{
            foreach ($result as $blog)
            {
                if($blog["user_id"]==$uid)
                {
                    $r = $conn->prepare("delete from post_like where user_id=:uid AND post_id=:pid");
                    $r->bindParam(":uid",$uid);
                    $r->bindParam(":pid",$pid);
                    $r->execute();

                    if(isset($r))
                    {
                        echo "<script>document.getElementById('like').className = 'fa fa-heart text-dark'</script>";
                    }
                }
            }
        }
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }
?>
