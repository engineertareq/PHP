<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Check a number is Prime Number or Not</h3>
    <form action="">
        <input type="number" name="given_number" placeholder="Enter the number"><br> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
    <?php
    if (isset($_REQUEST{'submit'})) {
     $theNumber =  $_REQUEST ['given_number'];
     
    //Lets' find the prime number
    if ($theNumber==1) {
        echo "$theNumber is not a prime Number";
        exit;
    } 
    if ($theNumber==2) {
        echo "$theNumber is a prime Number";
        exit;
    } 
    
    if ($theNumber>2) {
        for ($i=2; $i<$theNumber; $i++) { 
            if($theNumber % $i==0){
         echo "$theNumber is not a prime number";
         exit;
            }
        }
    } 
        echo "$theNumber is a prime Number";
    }
    ?>
</body>
</html>