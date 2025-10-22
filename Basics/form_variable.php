<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $_GET $_POST $_REQEST are built in supper global
    
    if(isset($_GET['submit'])){
        $fullname = $_GET['fullname'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];

    echo "Name:" . $fullname . "<br>";
    echo "Email:" . $email . "<br>";
    echo "Phone" . $phone . "<br>";
    }
    ?>

    <H3>Registration Form</H3>
    <form action="" method="get">
        Name:
        <input type="text" name="fullname" placeholder="Enter Your Name"><br>
        Email:
        <input type="text" name="email" placeholder="Enter Your Email"><br>
        Phone:
        <input type="text" name="phone" placeholder="Enter Your Phone"><br>
        <input type="submit" name="submit" value="SUBMIT">

    </form>
</body>
</html>