<?php
$password = "secrect";
$password1 = "secrect2";

if (strcmp($password, $password1) == -1){
    echo "Password do not match!";
}
 else {
    echo "Password Match!";
 }
?>

<hr>

<?php
$password = "secrect2";
$password1 = "secrect2";

if (strcmp($password, $password1) == -1){
    echo "Password do not match!";
}
 else {
    echo "Password Match!";
 }
?>