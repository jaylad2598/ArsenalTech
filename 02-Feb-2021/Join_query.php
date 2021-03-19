<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        // $stmt = $conn->prepare("select orders.orderid, customer.customername,orders.orderdate from orders INNER JOIN customer ON orders.customerid = customer.customerid");

        // $stmt = $conn->prepare("select orders.orderid,customer.customername from orders INNER JOIN customer ON orders.customerid = customer.customerid");

     // INNER JOIN WITH 3 TABLE   // $stmt = $conn->prepare("select orders.orderid,customer.customername,shipper.shippername from ((orders INNER JOIN customer ON orders.customerid = customer.customerid)INNER JOIN shipper ON orders.shipperid = shipper.shipperid)");

       //LEFT JOIN  // $stmt = $conn->prepare("select customer.customername,orders.orderid from customer LEFT JOIN orders ON customer.customerid=orders.customerid ORDER BY customer.customername");

       // RIGHT JOIN // $stmt = $conn->prepare("select orders.orderid,customer.customername from orders RIGHT JOIN customer ON orders.customerid = customer.customerid ORDER BY orders.orderid  ");

      // Self JOIN  // $stmt = $conn->prepare("select A.customername AS customer1, B.customername AS customer2, A.city from customer A, customer B where A.customerid<>B.customerid AND A.city=B.city ORDER BY A.city");
        
       // UNION // $stmt = $conn->prepare("select city from customer UNION ALL select city from supplier ORDER BY city");
    
        // UNION ALL // $stmt = $conn->prepare("select city,country from customer where country='UK' UNION ALL select city,country from supplier where country='UK' ORDER BY city");

        // EXIXTS // $stmt = $conn->prepare("select suppliername from supplier where EXISTS(select productname from product where product.supplierid = supplier.supplierid AND price > 10)");

        // $stmt = $conn->prepare("select COUNT(customerid) as customer_count,country from customer GROUP BY country");

       //  $stmt = $conn->prepare("select COUNT(customerid) as customer_count,country from customer GROUP BY country ORDER BY  country DESC");

       // $stmt = $conn->prepare("SELECT employee.firstname, COUNT(orders.orderid) AS NumberOfOrders FROM (orders INNER JOIN employee ON Orders.employeeid = employee.employeeid) GROUP BY firstname HAVING COUNT(orders.orderid) < 10");

       /* SELECT orderid, quantity, 
        CASE 
        WHEN quantity > 30 THEN 'The quantity is greater than 30' 
        WHEN quantity = 30 THEN 'The quantity is 30' 
        ELSE 'The quantity is under 30' 
        END AS quantity 
        FROM orderdetail */

        /* SELECT customername, city, country FROM customer
            ORDER BY (CASE
            WHEN city IS NULL THEN country
            ELSE city
            END); */

        //SELECT productname,(unit + IFNULL(price, 0)) FROM product

        

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
?>
<html>
    <body>
    <?php
        echo "<table border=1px cellpadding=5px cellspacing=10px>";
        echo "<tr>
             <td>Order Id</td>
            <td>Customer Name</td>
            <td>Shipper Name</td>
        </tr>";
        /*  foreach($stmt->fetchAll() as $k=>$v)
        {
            echo "<tr>";
            echo "<td>".$v['firstname']."</td>";
            echo "<td>".$v['NumberOfOrders']."</td>";
            echo "<td>".$v['city']."</td>";
            echo "<td>".$v['country']."</td>"; 
            
        echo "</tr>";
        } */
        echo "</table>";
    ?>
    </body>
</html>
