<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAriable in PHP</title>
</head>
<body>
<?php
/*
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
concade by . in php

PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

Array & Object are compound - can story multiple value
Others are scaller - can store single value 
*/

// variable inside of the function is called local variable
// variable outsidde of the function is called global variable


$x = 10; // intiger
$name = "Tareq"; // String
$age = 25;
$balance = 0.5;
$current_balance = null;
$trust = true;
$fruit = ["mango", "orange", "juice", 100, 200, 800];

class person 
{
    public $name = "Abdur Rahim";
    public $id = 4597;
    public $acc_number = 1292534;
}
$person = new person;

// To know the variable details or type
echo "<pre>";
var_dump($x);
var_dump($name);
var_dump($fruit);
var_dump($balance);
var_dump($current_balance);
var_dump($trust);
var_dump($person);

?>
</body>
</html>