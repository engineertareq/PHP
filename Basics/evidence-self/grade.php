<!DOCTYPE html>
<html>
<head>
    <title>Grade Evaluation</title>
</head>
<body>
    <form method="post">
        Enter Grade (A, B, C, D, F): 
        <input type="text" name="grade" maxlength="1">
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
</body>
</html>