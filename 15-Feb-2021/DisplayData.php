<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "select * from country";
    $result=$conn->query($query);
?>
<html>
    <head>
        <title>Display Data</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script>
            $(document).ready(function(){
                $("select.country").change(function(){
                    var selectedCountry = $(".country option:selected").val();
                    $.ajax({
                        type: "POST",
                        url: "citydata.php",
                        data: { cntid : selectedCountry }
                    }).done(function(data){
                        $("#response").html(data);
                    });
                });
            });
        </script>
    </head>
    <body>
        <form action="#" method="POST">
            <?php
                echo "<select class='country'>";
                    echo "<option disabled selected>Select city</option>";
                    foreach($result as $ky)
                        {
                            echo "<option value='" . $ky['cntid'] ."'>" . $ky['countryname']."</option>";
                        }
                echo "</select>";
            ?>
        </form>
    <p id="response"></p>
    </body>
</html>