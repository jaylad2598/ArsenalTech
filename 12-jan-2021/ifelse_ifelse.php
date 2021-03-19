<?php
    $msg="";
    if(isset($_GET['btnSubmit']))
    {
        $num = $_GET['txtweek'];

        if($num == 1)
        {
            $msg = "Laugh on Monday, laugh for danger.";
        }
        elseif($num == 2)
        {
            $msg ="Laugh on Tuesday, kiss a stranger.";
        }
        elseif($num == 3)
        {
            $msg ="Laugh on Wednesday, laugh for a letter.";
        }
        elseif($num == 4)
        {
            $msg ="Laugh on Thursday, something better.";
        }
        elseif($num == 5)
        {
            $msg ="Laugh on Friday, laugh for sorrow.";
        }
        elseif($num == 6)
        {
            $msg ="Laugh on Saturday, joy tomorrow.";
        }
        elseif($num == 7)
        {
            $msg = "Today is Sunday, enjoyyyyyyy.";
        }
        else{
            $msg ="Enter Valid number from 1 to 7";
        }
    }

?>

<html>
    <body>
        <form>
            <lable>Enter Day of the Week</lable>
            <input type="text" name="txtweek" >
            <input type="submit" name="btnSubmit" value="Submit">
        </from>

        <?php 
           echo "<br>";
           echo $msg;
        ?>
    </body>
</html>