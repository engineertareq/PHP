<?php
$fh = fopen("student1.txt", "w");
// while (!feof($fh)){
// echo fgets($fh) . "<br>";
// fclose($fh);
// }
fwrite($fh, "Hello tareq");
fclose($fh);

?>