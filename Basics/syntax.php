<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP Syntex</h3>
    <?php
     echo "Let's Get Started with PHP<br>"; 
    //  Using exho or print to get output in php
    // after each statement semicolone is mendatory ;
    // php code can placed anywhere in the entire page  
    // php is only case sensetive at variable 
    // variable decleared by $ sign
    
    $color = "Red<br>";
    echo $color;
?>
    <!---Short Circuit--->
    <?= $color; ?>
     
    <!-- Short open tag --->
    <!-- to turn on the tag go to php.ini file and turn on short_open_tag --->
    <? echo "<br>Hello World"; ?>

    
</body>
</html>