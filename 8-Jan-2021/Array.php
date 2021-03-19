<html>
    <body>
        <?php 

            $name = array("Jay", "Jitendrakumar", "Lad"); 
            
            $lgn = count($name);
            
            for($i=0;$i<$lgn;$i++)
            {
                echo $name[$i];  
            }
            echo "<br>";
            echo "Length Of String Is $lgn";
            echo "<br>";

            // Associate Array
            echo "<br>";
            $name1 = array("FirstName"=>"Jay","MiddleName"=>"Jitendrakumar","LastName"=>"Lad");
            foreach($name1 as $nm=>$nmval)
            {
                echo "Key = &nbsp ".$nm. "Value =&nbsp ".$nmval;
                echo "<br>";
            }

            //Multidimensional Array
            echo "<br>";
            $val = array(array("Jay","J.","Lad"),array("Aman","P.","Tailor"),array("Parth","K.","Patel"));

            echo $val[0][0].": In stock: ".$val[0][1].", sold: ".$val[0][2].".<br>";
            echo $val[1][0].": In stock: ".$val[1][1].", sold: ".$val[1][2].".<br>";
            echo $val[2][0].": In stock: ".$val[2][1].", sold: ".$val[2][2].".<br>";
            
        ?>
    </body>
</html>