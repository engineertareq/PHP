<?php
$names = ["Hasan", "Rabbany", "Nymur"];
$last = array_pop($names);

echo $last; // Outputs: Nymur
print_r($names); // Remaining array: ["Hasan", "Rabbany"]
print_r($last); // Remaining array: ["Hasan", "Rabbany"]
?>