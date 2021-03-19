<?php
    abstract class student
    {
        abstract function disp();
    }

    class abc extends student
    {
        function disp()
        {
            echo "This is class ABC<br>";
        }
    }

    class xyz extends student
    {
        function disp()
        {
            echo "This is class XYZ<br>";
        }
    }

    class pqr extends student
    {
        function disp()
        {
            echo "This is class PQR<br>";
        }
    }

    $a1 = new abc();
    $a1->disp();

    $x1 = new xyz();
    $x1->disp();

    $p1 = new pqr();
    $p1->disp();
?>
