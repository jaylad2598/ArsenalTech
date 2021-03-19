<html>
<head>
    <?php
        session_start(); 
    
        if(isset($_POST['submit']))
        {
            $_SESSION['fname'] = $_POST['firstname'];
            $_SESSION['lname'] = $_POST['lastname'];
            $_SESSION['contact'] = $_POST['phone'];
            $_SESSION['details'] = $_POST['details'];

            $fnm = $_SESSION['fname'];
            $lnm = $_SESSION['lname'];
            $cnt = $_SESSION['contact'];
            $data = $_SESSION['details'];

            $reg = '/^[a-zA-Z ]*$/'; // For only character 
            $regnum = '/^[0-9]*$/'; // for only number 
            $reg1 = '/^([a-zA-Z]{5}|[0-9]{3})*$/'; // for atlist 5 character or 3 number  
            if(preg_match($reg,$fnm) && preg_match($reg,$lnm))
            {
                if(preg_match($regnum,$cnt))
                {
                    if(preg_match($reg1,$data))
                    {
                        header("Location:viewdata.php");
                    }
                    else
                    {
                        echo "Enter Atlist 5 CHaracter and 3 Numbers......";  
                    }
                }
                else
                {
                    echo "Enter Onle Number......";    
                }
            }
            else{
                echo "Enter Onle Alphabate......";
            } 
        }
    ?>

<?php
   $copy_date = "Copyright 2020";
   $copy_date = preg_replace("([0-9]+)","2021", $copy_date);
   
   echo $copy_date;
?>
    </head>
    <body>
        <form method="post" action="#">
            <lable>First Name : </lable>
            <input type="text" name="firstname" palceholder="Enter First Name......." ><br>
            <lable>Last Name : </lable>
            <input type="text" name="lastname" palceholder="Enter Last Name......."><br>
            <lable>Contact Number : </lable>
            <input type = "text" name="phone" placeholder="Enter Contact Number......"><br>
            <lable>Details : </lable>
            <input type = "text" name="details" placeholder="Enter Details......"><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </body>
</html>