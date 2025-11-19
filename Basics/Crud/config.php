<!-- Connect With Database -->

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pwad68";
$db = new mysqli($host, $user, $password, $database);
if ($db->connect_errno){
    die("Connection Failed: ". $db->connect_errno);
}
// $db->close();
?>
