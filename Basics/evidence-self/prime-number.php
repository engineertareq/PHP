<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Check if a Number is Prime</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['number'];
        function isPrime($num) {
            if ($num <= 1) return false;
            if ($num == 2) return true;
            if ($num % 2 == 0) return false;
            
            for ($i = 3; $i <= sqrt($num); $i += 2) {
                if ($num % $i == 0) return false;
            }
            return true;
        }

        if (isPrime($num)) {
            echo "<p style='color:green;'>$num is a prime number.</p>";
        } else {
            echo "<p style='color:red;'>$num is not a prime number.</p>";
        }
    }
    ?>
</body>
</html>