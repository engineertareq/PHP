<?php
$price = 10; 

$tax = 5; 

$total =70;

function calcSalesTax($price, $tax){

$total = $price + ($price * $tax);

}


echo "Total cost: $total";

?>