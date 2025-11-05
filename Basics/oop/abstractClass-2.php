<?php 
abstract class abstractClass {
    public $name;
    public $address;

    function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    abstract function profile();
}

class childClass extends abstractClass {
    function profile() {
        $details = "";
        $details .= "Name: " . $this->name . "<br>";
        $details .= "Address: " . $this->address . "<br>";
        return $details;
    }
}

$person = new childClass("Israt", "Dhaka");
echo $person->profile();
?>