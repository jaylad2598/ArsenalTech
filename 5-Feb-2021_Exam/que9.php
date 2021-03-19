<?php
    if(isset($_POST['submit']))
    {
        $unit = $_POST['unit'];
        if($unit < 50)
        {
            echo "Electricity Bill Is = ".$unit * 3.50;
        }
        else if($unit <= 150)
        {
            $unit = 50-$unit;
            $res=abs($unit);
            $ans= 50 * 3.50;
            $ans1= $res * 4.00;
            $final = $ans + $ans1;

            echo "Electricity Bill Is = ".$final;
        }
        else if($unit <= 250)
        { 
            $res1 = 50 * 3.50;
            $res2 = 100 * 4.00;
            $ut = $unit - 150;
            $res3 = $ut * 5.20;
            $final = $res1 + $res2 + $res3;
 
            echo "Electricity Bill Is = ".$final;
        }
        else if($unit >= 250)
        {
            $res1 = 50 * 3.50;
            $res2 = 100 * 4.00;
            $res3 = 100 * 5.20;
            $ut = $unit - 250;
            $res4 = $ut * 6.50;
            $final = $res1 + $res2 + $res3 + $res4;
            echo "Electricity Bill Is = ".$final; 
        }
    }
?>
<html>
    <body>
        <form action="#" method="post">
        <lable>Enter Unit : </lable>
            <input type="number" name="unit"/>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>