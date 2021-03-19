<html>
<head>
    <?php
        session_start(); 
    
        if(isset($_POST['submit']))
        {
            $_SESSION['fname'] = $_POST['firstname'];
            $_SESSION['lname'] = $_POST['lastname'];
            
            header("Refresh: 5;URL=data.php");            
        }
    ?>
    </head>
    <body>
        <form method="post" action="#">
            <lable>First Name : </lable>
            <input type="text" name="firstname" palceholder="Enter First Name......." ><br>
            <lable>Last Name : </lable>
            <input type="text" name="lastname" palceholder="Enter Last Name......."><br>
        
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </body>
</html>