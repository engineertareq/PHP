<!-- studentClass.php -->
<?php  
class studentClass{
    public $id;
    public $name;
    public $batch;
    public $file;
    function __construct($file){
          $this->file = $file;
    }
    function result($fid) {
      $data =  file($this->file);
    foreach($data as $line){
        list($id, $name, $batch, $result) = explode(" ", $line);
      if($fid == $id){
      return $id. ", " . $name. ", " . $batch. ", ". $result;
    }
      }
    return $fid . " is not one of our student";
    }
}
?>
<!-- finalResult.php -->
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
<!-- assosiative array -->
 <?php
$country = array("BD" => "Dhaka", "USA" => "New York", "UK" => "Londonm", "India" => "Dellhi", "Finland" => "Helsinki");
echo "The key sorted array is: <br>";
ksort($country);
foreach ($country as $key => $value) {
    echo "$key => $value<br>";
}
?>

<hr>

<?php
$country = array("BD" => "Dhaka", "USA" => "New York", "UK" => "Londonm", "India" => "Dellhi", "Finland" => "Helsinki"
);
echo "The value sorted array is: <br>";
asort($country);
foreach ($country as $key => $value) {
    echo "$key => $value<br>";
}
?>

<hr>
<!-- Factorial -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Factorial Checker</h3>
    <form action="" method="post">
    Enter the Number <input type="number" name="number" required>
    <input type="submit" name="submit" value="Check">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = $_POST['number'];

        function factorial ($num){
            if($num<0) return null;
            $fact = 1;
            for ($i = 1; $i<=$num; $i++){
                $fact *= $i;
            }
            return $fact;
        }
        if ($num < 0) {
            echo "<p style='color:red;'>Factorial is not defined for negative numbers.</p>";
        } else {
            echo "<p style='color:green;'>Factorial of $num is " . factorial($num) . "</p>";
        }
    }
    ?>
</body>
</html>
<!-- File Upload -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload Using Php Protocol</h3>
    <?php
    if(isset($_POST['upload'])){
        $filename = $_FILES['myfile']['name'];
        $tmpfile =  $_FILES['myfile']['tmp_name'];
        $destination = "file/" . $filename;
        $FileSize =  $_FILES['myfile']['size']; 
        $maxSize = 100000;
        echo $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $allowedTypes = ["jpg", "jpeg", "png"];
        $errors =[];

        if($FileSize>$maxSize){
            $errors[] = "File is to large 1 mb is max file size" . "<br>";
        }
        if(!in_array($ext, $allowedTypes)){
             $errors[] = "<br>" . " File Type not allowed";
        }
        
        if(count($errors)>0){
            foreach($errors as $error){
            echo $error;
            }

        }
        else {
            move_uploaded_file($tmpfile, $destination);
            echo "<br>" . "Sucessfull";

        }
    }     
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
    <input type="submit" value="UPLOAD" name="upload">
    </form>
</body>
</html>
<!-- Grade Evaluation -->
 <!DOCTYPE html>
<html>
<head>
    <title>Grade Evaluation</title>
</head>
<body>
    <form method="post">
        Enter Grade (A, B, C, D, F): 
        <input type="text" name="grade" maxlength="1">
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = strtoupper($_POST['grade']); 

        if ($grade == "A") {
            echo "Excellent";
        } elseif ($grade == "B") {
            echo "Good";
        } elseif ($grade == "C") {
            echo "Fair";
        } elseif ($grade == "D") {
            echo "Poor";
        } elseif ($grade == "F") {
            echo "Failure";
        } else {
            echo "Invalid grade entered.";
        }
    }
    ?>
</body>
</html>
<!-- Min Max -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min Max Finder</title>
</head>
<body>
    <h3>Min Max Finder</h3>
    <form action="" method="post">
        Enter 5 Numbers separated by commas: 
        <input type="text" name="number" required>
        <input type="submit" name="submit" value="Check">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $givenNumbers = $_POST['number'];
        $numArray = explode(",", $givenNumbers);
        $outputNumbers = [];


        foreach ($numArray as $value) {
            $num = intval(trim($value));
            $outputNumbers[] = $num;
        }

        // Initialize min and max
        $min = $outputNumbers[0];
        $max = $outputNumbers[0];

        foreach ($outputNumbers as $num) {
            if ($num < $min) {
                $min = $num;
            }
            if ($num > $max) {
                $max = $num;
            }
        }

        echo "<p style='color:blue;'>Minimum Number is $min</p>";
        echo "<p style='color:green;'>Maximum Number is $max</p>";
    }
    ?>
</body>
</html>
<!-- Prime Number -->
 <!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Check if a Number is Prime</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['number'];
        function isPrime($num) {
            if ($num <= 1) return false;
            if ($num == 2) return true;
            if ($num % 2 == 0) return false;

            for ($i = 3; $i <= sqrt($num); $i += 2) {
                if ($num % $i == 0) return false;
            }
            return true;
        }

        if (isPrime($num)) {
            echo "<p style='color:green;'>$num is a prime number.</p>";
        } else {
            echo "<p style='color:red;'>$num is not a prime number.</p>";
        }
    }
    ?>
</body>
</html>
<!-- Reg Form -->
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
<!-- Sturent Result -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Sheet</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3>Student Result Sheet</h3>

    <?php
    $students = [
        "Alice" => 85,
        "Bob" => 92,
        "Charlie" => 78,
        "David" => 95,
        "Eva" => 99
    ];

    $maxScore = max($students);
    $topStudent = array_search($maxScore, $students);

    echo "<table>";
    echo "<tr><th>Student Name</th><th>Score</th></tr>";

    foreach ($students as $name => $score) {
        
            echo "<tr><td>$name</td><td>$score</td></tr>";
    }
    echo "</table>";

    echo "<p><strong>Highest Score:</strong> $maxScore by <strong>$topStudent</strong></p>";
    ?>
</body>
</html>