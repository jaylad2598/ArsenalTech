<?php

$msg="";
    if(isset($_GET['btnSubmit']))
    {
        $num = $_GET['txtweek'];
    
   
    switch($num)
    {
        case "1":
            echo "Laugh on Monday, laugh for danger";
            break;

        case "2":
            echo "Laugh on Tuesday, kiss a stranger";
            break; 

        case "3":
            echo "Laugh on Wednesday, laugh for a letter";
            break; 

        case "4":
            echo "Laugh on Thursday, something better.";
            break;

        case "5":
            echo "Laugh on Friday, laugh for sorrow.";
            break; 
        
        case "6":
            echo "Laugh on Saturday, joy tomorrow.";
            break;  

        default:
            echo "Enter Valid Number of Week";
            break;
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