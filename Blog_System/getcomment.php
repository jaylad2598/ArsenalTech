<?php
$pid = $_REQUEST['pid'];
?>
<script>
    $(document).ready(function() {

        $(".btnreply").click(function () {
            var cid = $(this).val();
            var txtreply = $("#txtreply"+cid).val();
            $.ajax({
                type: "POST",
                url: "reply.php",
                data: {"cmtid":cid, pid:<?php echo $pid;?>, reply:txtreply},
                dataType: "html",
                success: function (response) {

                    $.ajax({
                        type: "POST",
                        url: "getreply.php",
                        data: {pid:<?php echo $pid;?>,"cmtid":cid},
                        dataType: "html",
                        success: function (response) {

                            $(".replydata").empty();
                            $(".replydata").prepend(response);
                        }
                    });
                }
            });
        });
    });
</script>

<?php
session_start();
require "connection.php";
$db = new Connection();
$conn = $db->DBconnection();

if(isset($_POST["pid"]))
{
    try
    {
        $pid = $_POST['pid'];
        $uid = $_SESSION['userid'];
        $query = $conn->prepare("select comment.comment_id,comment.post_id,comment.comment,comment.user_id,user.first_name from comment INNER JOIN user ON comment.user_id = user.user_id where post_id = '".$pid."'");

        $query->execute();
        $result = $query->setFetchMode(PDO::FETCH_ASSOC);

        foreach($query->fetchALL() as $val)
        {
            echo "<i class='fa fa-user'>"."  ".$val['first_name']."</i>";
            echo "<p style='margin-left: 30px;margin-top: 10px'>".$val['comment']."<i class='fa fa-reply iconable' style='float: right'></i></p>";

            echo "<div class='row'>";
            echo "<div class='col-sm-8'>";
            echo "<p class='replydata'></p>";
            echo "</div>";
            echo "</div>";
            echo "<form method='post' action=''>";
            echo "<div class='divreply'>";
                echo "<input type='text' class='form-control' id='txtreply".$val['comment_id']."' placeholder='Write your Reply' aria-describedby='basic-addon2'>";
                echo "<button  class='btn btn-primary btnreply' style='margin-top: 5px' name='reply' style='font-size:10px' value='".$val['comment_id']."' type='button'>Reply</button><hr>";
            echo "</div>";
            echo "</form>";
        }
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }
}
?>
<script>
    $(".divreply").hide();
    $(document).ready(function(){
        $(document).off("click",".iconable");
        $(document).on("click",".iconable",function(){
            $(".divreply").toggle("slow");
        });
    });
</script>
