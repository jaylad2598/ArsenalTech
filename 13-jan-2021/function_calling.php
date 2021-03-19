<?php
    $val = array("jay","aman","parth","raj");
    function makeOption()
    {
        global $val;
        $o = "";
        foreach($val as $v)
        {
            $o = $o . "<option>".$v."</option>";
        }
        return $o;
    }
    function makeSelect()
    {
        echo "<select>".makeOption()."</select>";
    }
?>
<html>
    <body>
        <form>
            <?php
                makeSelect();
            ?>
        </form>
    </body>
</html>