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
    $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
    $sql = "SELECT * FROM students WHERE employeeID='$id'";
    $rawData = $db->query($sql);
    $row = $rawData->fetch_object();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        extract($_POST);
        $sql = "UPDATE students SET 
                    first_name = '$fname', 
                    last_name = '$lname', 
                    birthdate = '$dob', 
                    notes = '$notes' 
                WHERE employeeID = '$id'";
        $db->query($sql);
        header("Location: index.php");
        exit;
    }
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
</body>
</html>