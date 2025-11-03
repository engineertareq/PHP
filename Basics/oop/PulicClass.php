<?php
class Fruit
{
    //properties
    public $name;
    public $color;
}

//creating new object
$fruitObj = new Fruit;
$fruitObj->name = "Mango";
$fruitObj->color = "Green";

//creating new object
$fruitObj2 = new Fruit;
$fruitObj2->name = "Banana";
$fruitObj2->color = "Yellow";


var_dump($fruitObj, $fruitObj2);
?>

<!-- var_dump($fruitObj); -->