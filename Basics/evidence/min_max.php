<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min & Max Finder</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="numbers" placeholder="Enter numbers separated by commas"> <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $givenNumbers = $_POST["numbers"];
        $numberArray = explode(",", $givenNumbers);
        $outputNumbers = [];

        foreach ($numberArray as $value) {
            $num = intval(trim($value));
            $outputNumbers[] = $num;
        }

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

        echo "<p>Minimum number: $min</p>";
        echo "<p>Maximum number: $max</p>";
    }
    ?>
</body>
</html>