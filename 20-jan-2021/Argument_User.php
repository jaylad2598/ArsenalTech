<html>
    <head>
    <?php
function clac()
{
    if(isset($_POST['submit']))
    {
        
            $l = $_POST['number1'];
            $w = $_POST['number2'];

            $area =  $l * $w;
            $ans = "A rectangle of length $l and width $w has an area of $area where $l and $w are the arguments and $area is the result.";
            return $ans;
        }
        
    }
?>
    </head>

<body>
    <form method="post" action="Argument_User.php">
        <input type="text" name="number1"  placeholder="Enter Number 1 .....">
        <input type="text" name="number2"  placeholder="Enter Number 2 .....">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
            echo clac();
        ?>
</body>
</html>