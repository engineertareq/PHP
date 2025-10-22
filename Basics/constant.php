<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant</title>
</head>
<body>
    <!-- using define -->
    <?php
    echo "<pre>";
// case-sensitive constant name
define("GREETING", "Welcome to php");
echo GREETING;
?> 
<!-- Const Keyword -->
<?php
echo "<pre>";
const name = "Volvo";
const price = 800000;
echo "Brand: " . name . "<br>Price: " . price;
?> 
</body>
</html>