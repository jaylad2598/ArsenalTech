<?php
    trait disp
    {
        public function demo()
        {
            echo "Welcome to ArsenalTech..<br>";
        }
    }

    trait good
    {
        public function data()
        {
            echo "Good Moorning..<br>";
        }
    }

    class abc
    {
        use disp,good;
    }

    class pqr
    {
        use disp,good;
    }

    $a1 = new abc();
    $p1 = new pqr();

    $a1->demo();
    $a1->data();
    $p1->demo();
    $p1->data();
?>
