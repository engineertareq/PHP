<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant</title>
</head>
<body>
    <?php
       class goodByeClass {
         const myMessege = "We're learning php ooop<br>";
         const myMessege2 = "<br>Pray for Me";

         function info(){
           echo self::myMessege;
         }
       }

       $obj1 =  new goodByeClass;
     $obj1->info();

     
       echo goodByeClass::myMessege2;

     
    ?>
</body>
</html>