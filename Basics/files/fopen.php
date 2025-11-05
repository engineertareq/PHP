<?php
$fh = fopen("student.txt", "r");
while (!feof($fh)){
echo fgets($fh) . "<br>";
}
fclose($fh);
?>