<?php
    class student
    {
        public $stdid;
        public $name;
        public $age;

        function __construct($id,$nm,$ag)
        {
            $this->stdid = $id;
            $this->name = $nm;
            $this->age = $ag;
        }

        function data()
        {
            echo "Student Id Is : ".$this->stdid."<br>";
            echo "Student Name Is : ".$this->name."<br>";
            echo "Student Age Is : ".$this->age."<br><br>";
        }
    }

    class teacher extends student
    {
        public $ma = 80;
        public $sci = 70;
        public $eng = 89;
        public $total;

        function data()
        {
            $this->total = $this->ma + $this->sci + $this->eng;
            echo "Student Id Is : ".$this->stdid."<br>";
            echo "Student Name Is : ".$this->name."<br>";
            echo "Student Age Is : ".$this->age."<br>";
            echo "Total Is : ".$this->total."<br>";
        }
    }
    $s1 = new student("101","Jay","24");
    $s2 = new teacher("102","Parth","24");
    $s1->data();
    $s2->data();
?>
