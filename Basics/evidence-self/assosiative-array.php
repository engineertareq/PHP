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

<?php
$country = ["BD" => "DHAKA", "USA" => "NEW YORK", "UK" => "LONDON", "INDIA" => "DELLHI", "FINLAND" => "HELSINKI"];
echo "The current array is: <br>";
echo "<pre>";
print_r($country);
echo "</pre>";
krsort($country);
echo "The key reverse sorted array is: <br>";
foreach ($country as $key => $value) {
    echo "$key => $value<br>";
}
?>