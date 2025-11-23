<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min Max Finder</title>
</head>
<body>
    <h3>Min Max Finder</h3>
    <form action="" method="post">
        Enter 5 Numbers separated by commas: 
        <input type="text" name="number" required>
        <input type="submit" name="submit" value="Check">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $givenNumbers = $_POST['number'];
        $numArray = explode(",", $givenNumbers);
        $outputNumbers = [];


        foreach ($numArray as $value) {
            $num = intval(trim($value));
            $outputNumbers[] = $num;
        }

        // Initialize min and max
        $min = $outputNumbers[0];
        $max = $outputNumbers[0];

        foreach ($outputNumbers as $num) {
            if ($num < $min) {
                $min = $num;
            }
            if ($num > $max) {
                $max = $num;
            }
        }

        echo "<p style='color:blue;'>Minimum Number is $min</p>";
        echo "<p style='color:green;'>Maximum Number is $max</p>";
    }
    ?>
</body>
</html>