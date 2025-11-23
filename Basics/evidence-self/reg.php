<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="username"><br>
        email: <input type="text" name="Email">
        <input type="submit" value="Submit">
  <?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userName = $_POST['username'];
        $email = $_POST['Email'];
        if(preg_match(('/^@\C{4,8}$/'), $userName)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Registration successful!<br>";
                echo "Username: $userName<br>";
                echo "Email: $email<br>";
            } else {
                echo "Invalid email address.<br>";
            }
        } else {
            echo "Invalid username. Username must start with @ followed by 4–8 digits.<br>";
        }
     }
  ?>
    </form>
</body>
</html>