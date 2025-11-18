<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Students</title>
</head>
<body>
    
<h3>New Students</h3>
<?php
if(isset($_POST['submit'])):
extract($_POST);
$sql = "INSERT INTO students VALUES (NULL, '$fname', '$lname', '$dob', '$notes')";
include_once("config.php");
$db->query($sql);
if($db->affected_rows){
    echo "Inserted Succesfully"."<hr>"; 
}
endif;
?>


<form action="" method="POST">
    First Name:
    <input type="text" name="fname" placeholder="Enter the First Name" required><br>
    Last Name:
    <input type="text" name="lname" placeholder="Enter the Last Name" required><br>
    Date of Birth:
    <input type="date" name="dob" required><br>
    Notes:
    <textarea name="notes" placeholder="Enter The Notes"></textarea> <br>
    <input type="submit" name="submit" value="Submit">
</form> <br>
<a href="student.php" style="
    padding:6px 6px;
    background:#4CAF50;
    color:white;
    border-radius:3px;
    text-decoration:none;
    transition:0.3s;
"
onmouseover="this.style.background='#45a049';"
onmouseout="this.style.background='#4CAF50';"
>
    SEE the Students data
</a>

</body>
</html>