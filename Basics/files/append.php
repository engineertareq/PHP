<?php
$fh = fopen("students-leady.txt", "a");
fwrite($fh, "Israt\n");
fwrite($fh, "Ayesha\n");
fwrite($fh, "Naharin\n");
fwrite($fh, "Nadia\n");
fwrite($fh, "Sadia\n");
fwrite($fh, "Mim\n");
fwrite($fh, "Dim\n");

$fh = fopen("students-leady.txt", "r");
while (!feof($fh)){
echo fgets($fh) . "<br>";
}
fclose($fh);
?>

