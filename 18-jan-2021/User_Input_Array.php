<?php 
    session_start();
    if(isset($_POST['Submit']))
    {
        $nm = $_POST['name'];
        $arr = explode(",",$nm);
        
        $_SESSION['abc']=(array_merge($_SESSION['abc'],$arr));            
    }
?>
<html>
    <head>
        <?php
            if(!isset($_SESSION['abc']))
            {
                $trans = array("Automobile", "Jet", "Ferry", "Subway");
                $_SESSION['abc']=$trans;
            } 
        ?>
    </head>
    <body>    
        <form action="User_Input_Array.php" method="post">
            <lable>Enter Value</lable>
            <input type="text" name="name" placeholder="Enter Value">
            <input type="submit" name="Submit" value="Submit">      
        </form>
        <?php
            $pqr = $_SESSION['abc'];
            foreach($pqr as $c)
            {
                echo "<ol>".$c."</ol>";
            }
        ?>
    </body>
</html>