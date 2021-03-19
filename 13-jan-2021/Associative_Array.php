<?php
    $city = array("Tokyo"=>"Japan", "Mexico_City"=> "Mexico", "NewYorkCity"=> "USA", "Mumbai"=> "India", "Seoul"=> "Korea", "Shanghai"=> "China", "Lagos"=> "Nigeria","BuenosAires"=>"Argentina","Cairo"=>"Egypt", "London"=>"England");
?>
<html>
    <body>
        <form method='POST' action="#">
            <?php
                echo "<select name='city'>";
                foreach($city as $ct=>$ctname)
                {
                    echo "<option value=". $ct.">".$ct ."</option>";
                }
                echo "</select>";
            ?>
            <input type="submit" value="Submit" name="btnSubmit">
        </form>
    </body>
</html>
<?php
    if(isset($_REQUEST['btnSubmit']))
    {
        $country = $city[$_REQUEST['city']];
        $city = $_REQUEST['city'];
        echo "$city is in $country., where $city is the value chosen by the user, and $country is its key.";
    }
?>