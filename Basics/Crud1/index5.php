<?php include_once("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

<?php
# $sql = "SELECT * FROM students";
# $sql = "SELECT * FROM students ORDER BY empployeeID desc";
 $sql = "SELECT * FROM students ORDER BY employeeID asc";
$result = $db->query($sql); 

if ($result->num_rows > 0): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DOB</th>
            <th colspan="2">Action</th>
        </tr>
        <?php while ($row1 = $result->fetch_object()){ ?>
        <tr>
            <td><?php echo $row1->employeeID; ?></td>
            <td><?php echo $row1->first_name; ?></td>
            <td><?php echo $row1->last_name; ?></td>
            <td><?php echo $row1->birthdate; ?></td>
            
            <td><a href="student-edit.php?id=<?php echo $row1->employeeID; ?>">Edit</a></td>
            <td><a href="test.php?id=<?php echo $row1->employeeID; ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
<?php else: ?>
    <p>No records found.</p>
<?php endif; 
$db->close();
?> <br>
<a href="dataform.php" style="
    padding:6px 6px;
    background:#4CAF50;
    color:white;
    border-radius:3px;
    text-decoration:none;
    transition:0.3s;
"
onmouseover="this.style.background='#ced112ff';"
onmouseout="this.style.background='#afa84cff';"
>
    ADD NEW DATA
</a>


</body>
</html>