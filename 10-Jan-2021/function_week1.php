<html>
    <body>
        <?php
            $year=2021;
            $y = '28';
            if($year % 4==0){
                $y = '29'; 
            } 
            $month=array("JAN"=>"31","FAB"=>$y,"MAR"=>"31","APR"=>"30","MAY"=>"31","JUNE"=>"30","JULY"=>"31","AUG"=>"31","SEP"=>"30","OCT"=>"31","NOV"=>"30","DEC"=>"31");        
        ?>
        <form>          
            <select name="month">
                <?php
                    foreach($month as $ky=>$val)
                    {
                ?>
                    <option value='<?php echo $ky;?>'><?php echo $ky;?></option>
                    <?php
                    echo "<br>";
                    }
                ?>
            </select>

                <input type="submit" value="submit" name="btnSubmit">
        </form>
        <?php
        if(isset($_REQUEST['btnSubmit']))
        {
                $mon=$_REQUEST['month'];
                echo "$mon has $month[$mon] days.";
        }
        ?>
    </body>
</html>
