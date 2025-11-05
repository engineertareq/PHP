<?php
$user_data = file("users.txt");
// echo "<pre>";
// var_dump($user_data);
foreach ($user_data as $line) {
  list($name, $email) =  $info = explode(" ", $line);
    echo "Name: $name" . " Email: $email" . "<br>";
}
?>