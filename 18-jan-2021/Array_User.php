<?php
    $weather  = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

    function funarr($weather)
    {
        foreach($weather as $we)
        {
            echo "<lable><input type='checkbox' name='chkweather[]' value='" .$we."'>" .strtoupper($we)."</lable>";
            echo "<br>";
        }
    }
?>

<html>
    <head>
    
    </head>

    <body>
        <form method="post" action="#">
            
            <lable>City</lable>
            <input type="text" name="txtcity" value=""><br>

            <lable>Month</lable>
            <input type="text" name="txtmonth" value=""><br>

            <lable>Year</lable>
            <input type="text" name="txtyear" value=""><br>

            <?php
                funarr($weather)
            ?>
            <br>
            <input type="submit" name="btnSubmit" value="Submit"><br>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['btnSubmit']))
    {
        $ct = $_POST['txtcity'];
        $mo = $_POST['txtmonth'];
        $yr = $_POST['txtyear'];

        if(!empty($_POST['chkweather']))
        {
            foreach($_POST['chkweather'] as $val)
            {
               echo "<li>".$val."</li>";
            }
            
        }

        echo "In $ct in the month of $mo $yr, you observed the following weather:, where $ct, $mo and $yr are values from the array you created.";
    }
?>