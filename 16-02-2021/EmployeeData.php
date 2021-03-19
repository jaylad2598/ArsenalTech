<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practical";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $stmt = $conn->prepare("SELECT * FROM employees LIMIT 5");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
?>
<html>
<head>
    <title>Employee Data</title>
    <script src="https://code.jquery.com/jquery-1.3.2.js"> </script>

    <script type="text/javascript">
        var offset = 0;
        $(document).ready(function() {
            $("#btnnext").click(function() {
                offset = offset + 5;
                $.ajax({    //create an ajax request to display.php
                    type: "POST",
                    url: "empdata.php",
                    data: {offset: offset},
                    dataType: "html",   //expect html to be returned
                    success: function(response){
                        $(".table-data").append(response);
                    }
                });
            });
        });
    </script>
</head>
<body>
<div align=center>
        <h2 style='text-align:center'>Users</h2>
        <?php
        if(isset($result))
        {
            echo "<table class='table-data'><tr>
                        <td>Ep_Id</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email</td>
                        <td>Phone Number </td>
                        <td>Hire Date</td>
                        <td>Job Id</td>
                        <td>Salary</td>
                        <td>Commission</td>
                        <td>Manager Id</td>
                        <td>Department Id</td>
                    </tr>";
            foreach($stmt->fetchAll() as $k=>$v)
            {
                echo "<tr>";
                echo "<td>".$v['EMPLOYEE_ID']."</td>";
                echo "<td>".$v['FIRST_NAME']."</td>";
                echo "<td>".$v['LAST_NAME']."</td>";
                echo "<td>".$v['EMAIL']."</td>";
                echo "<td>".$v['PHONE_NUMBER']."</td>";
                echo "<td>".$v['HIRE_DATE']."</td>";
                echo "<td>".$v['JOB_ID']."</td>";
                echo "<td>".$v['SALARY']."</td>";
                echo "<td>".$v['COMMISSION_PCT']."</td>";
                echo "<td>".$v['MANAGER_ID']."</td>";
                echo "<td>".$v['DEPARTMENT_ID']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "No Data in Database";
        }
        ?>
    <input type='button' id='btnnext' value='Next' style="margin: 10px;float: left;margin-left:120px">
</body>
</html>
