<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       if(isset($_POST['submit'])) {
        $stid = $_POST['studentId'];
        include ("studentClass.php");

     $sheet = new StudentClass("result.txt");
     $result= $sheet->result($stid);
         echo $result;
       }
    ?>
    <h3>
            Find Result
        </h3>
    <form action="" method="post">
    <input type="number" name="studentId">
    <input type="submit" name="submit" value="Search">
    </form>
</body>
</html>