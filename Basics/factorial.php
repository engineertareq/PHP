<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Finding A Number is Factorial or Not</h3>
    <form action="">
        <input type="text" name="the_Number" placeholder="Enter the Number"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
    <?php
    
    if (isset($_REQUEST['submit'])) {
     $theNumber =  $_REQUEST ['the_Number'];
     $factorial = 1;
    //Lets' find the factorial
    for ($i=1; $i<=$theNumber; $i++) 
        { 
        $factorial *= $i;
    }
    }
    echo "The Factorial of $theNumber is $factorial";
    ?>
</body>
</html>