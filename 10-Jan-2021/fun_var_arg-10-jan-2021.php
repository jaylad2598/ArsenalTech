<?php
    $name  = array("Jay","Harsh","Jayneel","Aman","Raj","Parth");

    function funarr($name)
    {
        foreach($name as $nm)
        {
            echo "<lable><input type='checkbox' name='chkname' value='" .$nm."'>" .strtoupper($nm)."</lable>";
            echo "<br>";
        }
    }
?>
<html>
    <body>
        <form>
            <?php
                funarr($name)
            ?>

            <input type="button" value="Submit" name="btnSubmit">
        </form>
    </body>
</html>

