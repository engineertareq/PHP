<?php
 class Fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
         function info(){
            echo "Name: " . $this->name . "<br>" . "Color: " . $this->color . "<br>";
         }
 }

     class Grape extends Fruit{
        function message(){
            echo "I'm a function inside grape class";
        }
     }
     $obj1 = new Fruit("Mango", "Green");
     $obj1->info();

     $obj2 = new Fruit("Banan", "Yellow");
        $obj2->info();
        
?>