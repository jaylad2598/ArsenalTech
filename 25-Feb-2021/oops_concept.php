<?php
class Firstname {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    protected function demo() {
        echo "The Name is {$this->name} and Age is {$this->age}.";

    }
}
class Lastname extends Firstname {
    public function display() {
        echo "Lastname Extends Firstname <br>";
        $this->demo();
    }
}

$lname = new Lastname("jay", "24");
$lname->display();
?>