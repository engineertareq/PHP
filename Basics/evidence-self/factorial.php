<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Factorial Checker</h3>
    <form action="" method="post">
    Enter the Number <input type="number" name="number" required>
    <input type="submit" name="submit" value="Check">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = $_POST['number'];

        function factorial ($num){
            if($num<0) return null;
            $fact = 1;
            for ($i = 1; $i<=$num; $i++){
                $fact *= $i;
            }
            return $fact;
        }
        if ($num < 0) {
            echo "<p style='color:red;'>Factorial is not defined for negative numbers.</p>";
        } else {
            echo "<p style='color:green;'>Factorial of $num is " . factorial($num) . "</p>";
        }
    }
    ?>
</body>
</html>