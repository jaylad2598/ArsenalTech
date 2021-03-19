<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $nm = $_POST['name'];
        $arr = explode(",",$nm);
        $_SESSION['val'] = array_merge($_SESSION['val'],$arr);
    }
?>
<html>
    <head>
        <?php
            if(!isset($_SESSION['val']))
            {
                $temp = array("ABC","PQR","XYZ","JKL");
                $_SESSION['val'] = $temp;
            }
        ?>
    </head>
    <body>
        <form action="#" method="post">
            <lable>Enter Value : </lable>
            <input type="text" name="name" placeholder="Enter Value........">

            <input type="submit" value="Submit" name="submit">
        </form>
        <?php
        $pqr = $_SESSION['val'];
            foreach($pqr as $v)
            {
                echo "<ol>".$v."</ol>";
            }
        ?>
    </body>
</html>