<?php
    $conn = mysqli_connect('localhost','root','','test');
    if(!$conn)
    {
        die('Could not connect: ' . mysqli_error($conn));
    }
    if(isset($_POST["cntid"]))
    {
        $ky = $_POST["cntid"];
        mysqli_select_db($conn,"test");
        $query = "select * from city where cntid= '".$ky."'";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($result))
        {
            echo "<ul>".$row['cityname']."</ul>";
        }
    }
?>