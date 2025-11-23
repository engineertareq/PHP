<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Grade Evaluation Form
    <form action="" method="post">
     <input type="text" name="grade" maxlength="1">
        <input type="submit" value="Submit">
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
       $grade = strtoupper($_POST['grade']); 

        if ($grade == "A") {
            echo "Excellent";
        } elseif ($grade == "B") {
            echo "Good";
        } elseif ($grade == "C") {
            echo "Fair";
        } elseif ($grade == "D") {
            echo "Poor";
        } elseif ($grade == "F") {
            echo "Failure";
        } else {
            echo "Invalid grade entered.";
        }
    }
  ?>


    </form>
</body>
</html>