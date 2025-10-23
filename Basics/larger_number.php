<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Finding Larger Value from Array</h3>
    <?php
    $Numbers = array(787, 100, 78, 514, 7852 , 69, 90, 55647, 10, 20, 4);
    $count = count($Numbers);
    $max = $Numbers[0];
    echo "The total Numbers here is $count";
    for ($i=0; $i < $count ; $i++) { 
        if ($Numbers[$i] > $max) {
            $max = $Numbers[$i];
        }
    }
    echo "<br> The Max Number is $max";
    ?>
</body>
</html>
