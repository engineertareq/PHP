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


    if (preg_match('/^\@.{4,8}$/', $userName)) {
        echo "<p style='color:green;'> Registration successful!</p>";
        echo "<p>Full Name: $fullName</p>";
        echo "<p>Username: $userName</p>";
        echo "<p>Email: $email</p>";
    } else {
        echo "Invalid username. Username Must Start With @ and there must be 4–8 digits</p>";
    }
}
?>

<form method="POST" action="">
    <input type="text" name="fullName" placeholder="Enter Your Full Name" required> <br><br>
    <input type="text" name="userName" placeholder="Enter Your User Name" required> <br><br>
    <input type="email" name="EmailAddress" placeholder="Enter Your Email Address" required> <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>