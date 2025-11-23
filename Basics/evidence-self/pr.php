<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Prime Number</h3>
    <form action="" method="post">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="check">
    </form>

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = intval($_POST["number"]);
    
    function isPrime($number){
        if ($number <=1) return false;
        if ($number ==2) return true;
        if ($number %2 ==0) return false;
      
        for ($i=3; $i<=sqrt($number); $i+=2){
            if ($number % $i ==0) return false;
        }
        return true;
    }
    if (isPrime($number)){
        echo "<p style='color:green;'>$number is a prime number.</p>";
    } else {
        echo "<p style='color:red;'>$number is not a prime number.</p>";    
    }
}
    ?>
</body>
</html>