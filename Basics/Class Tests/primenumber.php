<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Number Checker</title>
</head>
<body>
  <h3>Check if a Number is Prime</h3>

  <form method="post" action="">
    <input type="number" name="given_number" placeholder="Enter a number" required><br><br>
    <input type="submit" name="submit" value="CHECK">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $theNumber = intval($_POST['given_number']);

    if ($theNumber <= 1) {
      echo "<p>$theNumber is not a prime number.</p>";
    } elseif ($theNumber == 2) {
      echo "<p>$theNumber is a primenumber.</p>";
    } else {
      $isPrime = true;
      for ($i = 2; $i <= sqrt($theNumber); $i++) {
        if ($theNumber % $i == 0) {
          $isPrime = false;
          break;
        }
      }
      if ($isPrime) {
        echo "<p>$theNumber is a prime number.</p>";
      } else {
        echo "<p>$theNumber is not a prime number.</p>";
      }
    }
  }
  ?>
</body>
</html>