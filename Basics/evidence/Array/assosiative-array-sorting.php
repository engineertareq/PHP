<?php
$marks = array("Tareq" => "100", "Kaiymul" => "200", "Abidul" => 150);
echo "The Kay Sorted Array IS: <br>";
ksort($marks);
foreach ($marks as $key => $value) {
    echo "$key => $value <br>";
}
?>

<hr>

<?php
$marks = array("Tareq" => "100", "Kaiymul" => "200", "Abidul" => 150);
echo "The Kay Sorted Array IS: <br>";
asort($marks);
foreach ($marks as $key => $value) {
    echo "$key => $value <br>";
}
?>