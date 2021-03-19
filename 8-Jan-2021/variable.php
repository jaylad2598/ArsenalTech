          <?php  
            $a=10;
            $b=10.50;
            $chr="ABC";
            $p;

            function mydemo()
            {
                $c=20;
                echo "Value of A is :$a"; // this sentence generate error because of variable a is outside of function
                echo "<br>";
                echo "Value of c is :$c";
                echo "<br>";

                global $a,$b,$p;
                $p = $a + $b;

            }
            mydemo();
            echo "Value of P is : $p";
            echo "<br>";

            function demo1()
            {
                $GLOBALS['p'] = $GLOBALS['a'] + $GLOBALS['b'];
            }

            demo1();
            echo "Value of is Is $p";
            echo "<br>";
        ?>