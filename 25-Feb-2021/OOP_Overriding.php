<?php
class Firstclass {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function intro() {
        echo "The Name is {$this->name} and the Age is {$this->age}.";
    }
}

class Lastclass extends Firstclass {
    public $weight;
    public function __construct($name, $age, $weight) {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }
    public function intro() {
        echo "The Name is {$this->name}, the Age is {$this->age}, and the weight is {$this->weight}";
    }
}

$lclass = new Lastclass("jay", "24", 60);
$lclass->intro();
?>