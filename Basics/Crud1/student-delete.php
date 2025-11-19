<?php 
$id = $_GET ['id'];
include_once ('config.php');

$sql = "DELETE FROM students WHERE employeeID = '$id'";

$db->query($sql);
// relocate / back to previous page
header("Location:index.php");
?>