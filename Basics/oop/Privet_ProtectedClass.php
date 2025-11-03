<?php
class Fruit
{
    //properties
    private $name;
    private $color;

    // Stter Function
    function set_name($name){
         $this->name = $name;
    }
    function set_color($color){
         $this->name = $color;
    }

    function get_name_color (){
       echo "Name: " . $this->name . "<br>" . "Color: " . $this->color;
    }
  
}
 //creating new object
 $obj1 = new Fruit;
  $obj1->set_name("Apple");
  $obj1->set_color("Gray");
  $obj1->get_name_color()

//  var_dump($obj1);
?>

<!-- var_dump($fruitObj); -->