<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practical";
    try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            $ofset = $_POST["offset"];
            $stmt = $conn->prepare("SELECT * FROM employees LIMIT 5 OFFSET $ofset");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
?>  <?php
        if(isset($result))
        {

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
        }
        else
        {
            echo "No Data in Database";
        }
        ?>
