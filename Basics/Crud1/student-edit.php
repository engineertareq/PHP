<?php include_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h3>Editing Student Data</h3>

    <?php  
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE employeeID='$id'";
    $rawData = $db->query($sql);
    $row = $rawData->fetch_object();
    ?>

    <form action="" method="POST">
        First Name:
        <input type="text" name="fname" required value="<?php echo $row->first_name; ?>"><br>
        Last Name:
        <input type="text" name="lname" required value="<?php echo $row->last_name; ?>"><br>
        Date of Birth:
        <input type="date" name="dob" required value="<?php echo $row->birthdate; ?>"><br>
        Notes:
        <textarea name="notes" placeholder="Enter The Notes"><?php echo $row->notes; ?></textarea><br>
        <input type="submit" name="submit" value="Update">
    </form><br>
   
    <?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $notes = $_POST['notes'];

        $updateSql = "UPDATE students SET 
                        first_name = '$fname', 
                        last_name = '$lname', 
                        birthdate = '$dob', 
                        notes = '$notes' 
                      WHERE employeeID = '$id'";

        if ($db->query($updateSql)) {
            echo "<p style='color:green;'>Record updated successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error updating record: " . $db->error . "</p>";
        }
    }

    $db->close();
    ?>
</body>
</html>