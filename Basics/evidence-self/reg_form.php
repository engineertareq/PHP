<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>
<body>

<h3>Registration Form</h3>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $email = $_POST['EmailAddress'];


    if (preg_match('/^@\C{4,8}$/', $userName)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Registration successful!</p>";
            echo "<p>Full Name: $fullName</p>";
            echo "<p>Username: $userName</p>";
            echo "<p>Email: $email</p>";
        } else {
            echo "<p>Invalid email address.</p>";
        }
    } else {
        echo "<p>Invalid username. Username must start with @ followed by 4–8 digits.</p>";
    }
}
?>
<form method="POST" action="">
    <input type="text" name="fullName" placeholder="Enter Your Full Name" required> <br><br>
    <input type="text" name="userName" placeholder="Enter Your User Name" required> <br><br>
    <input type="text" name="EmailAddress" placeholder="Enter Your Email Address" required> <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>