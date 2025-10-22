<?php
$num1 = 33;
 if ($num1>79) {
    echo "Your Grade is A+ & You have got " . $num1 . " in Math";
 }
 elseif ($num1>74) {
    echo "Your Grade is A & You have got " . $num1 . " in Math";
 }
elseif ($num1>69) {
    echo "Your Grade is A- & You have got " . $num1 . " in Math";
 }
elseif ($num1>59) {
    echo "Your Grade is B+ & You have got " . $num1 . " in Math";
 }
elseif ($num1>49) {
    echo "Your Grade is B & You have got " . $num1 . " in Math";
 }
elseif ($num1>32) {
    echo "Your Grade is C & You have got " . $num1 . " in Math";
 }
 else{
    echo "You're fail";
 }
?>