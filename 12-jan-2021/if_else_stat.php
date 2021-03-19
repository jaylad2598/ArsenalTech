<html>
    <body>
        <form method="post">
            <input type="text" name="txtname">
            <input type="submit" name="btnSubmit" value="Submit">
        </form>
    </body>
</html>

<?php
    if(isset($_POST['btnSubmit']))
    {
        if(!empty($_POST["txtname"]))
        {
            echo "Value is Set ";
            echo "<br>";
            echo "Value is : ".$_POST["txtname"]." ";
        }
        else{
            echo "Value is Not Set";
            
        }
    }
?>