<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Factoral Finder</h4>.
    <form action="" method="post">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Calculate Factorial">
    </form>
    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $niumber = intval($_post["number"]);

        function factorial ($number){
            
        }
        
       }
    ?>
    </body>
</html>