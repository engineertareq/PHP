<?php
$country = array("BD" => "Dhaka", "USA" => "New York", "UK" => "Londonm", "India" => "Dellhi", "Finland" => "Helsinki");
echo "The key sorted array is: <br>";
ksort($country);
foreach ($country as $key => $value) {
    echo "$key => $value<br>";
}
?>

<hr>

<?php
$country = array("BD" => "Dhaka", "USA" => "New York", "UK" => "Londonm", "India" => "Dellhi", "Finland" => "Helsinki"
);
echo "The value sorted array is: <br>";
asort($country);
foreach ($country as $key => $value) {
    echo "$key => $value<br>";
}
?>

<hr>