<?php
$foods = array ("pasta", "steak", "fish", "potatoes");
$food = preg_grep("/^p/", $foods);
print_r($food);

?>
<hr>

<?php
$foods = array("pasta", "steak", "fish", "potatoes");
$food = preg_grep("/k$/", $foods);
print_r($food);
?>