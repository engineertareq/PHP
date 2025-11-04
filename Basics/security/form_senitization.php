<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Example</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 5px;
    }
  </style>
</head>
<body>

<?php
  $error = "";
  $nameErr = $emailErr = $skillsErr = $foodsErr = "";
  $name = $email = "";
  $skills = $foods = [];

  if (isset($_POST['submit'])) {
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $skills = isset($_POST['languages']) ? $_POST['languages'] : [];
      $foods = isset($_POST['food']) ? $_POST['food'] : [];


      if (empty($name)) {
          $nameErr = "<br>" ."Name is mandatory.";
      }
      if (empty($email)) {
          $emailErr ="<br>" . " Email is mandatory.";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr ="<br>" . " Please enter a valid email address.";
      }
      if (empty($skills)) {
          $skillsErr ="<br>" . " Please select at least one skill.";
      }
      if (empty($foods)) {
          $foodsErr ="<br>" . " Please choose at least one favorite food.";
      }

      if (empty($nameErr) && empty($emailErr) && empty($skillsErr) && empty($foodsErr)) {
          $skills_output = implode(", ", $skills);
          $foods_output = implode(", ", $foods);
      }
  }
?>

<form action="" method="post">
  <label>Name:</label>
  <input type="text" name="name" placeholder="Enter Your Name" 
         value="<?php echo ($name); ?>"> 
  <span class="error"><?php echo $nameErr; ?></span>
  <br><br>
  
  <label>E-Mail:</label>
  <input type="email" name="email" placeholder="Enter Your E-Mail" 
         value="<?php echo ($email); ?>"> 
  <span class="error"><?php echo $emailErr; ?>
  <br><br>
  
  <label>Favourite Food:</label>
  <select name="food[]" multiple>
    <option value="Chicken" <?php echo (in_array("Chicken", $foods)) ? 'selected' : ''; ?>>Chicken</option>
    <option value="Fish" <?php echo (in_array("Fish", $foods)) ? 'selected' : ''; ?>>Fish</option>
    <option value="Dry Food" <?php echo (in_array("Dry Food", $foods)) ? 'selected' : ''; ?>>Dry Food</option>
  </select> 
  <span class="error"><?php echo $foodsErr; ?></span>
  <br><br>
  
  <label>Skills:</label> <br>
  <input type="checkbox" name="languages[]" value="C#" <?php echo (in_array("C#", $skills)) ? 'checked' : ''; ?>>C#
  <input type="checkbox" name="languages[]" value="asp" <?php echo (in_array("asp", $skills)) ? 'checked' : ''; ?>>asp
  <input type="checkbox" name="languages[]" value="c++" <?php echo (in_array("c++", $skills)) ? 'checked' : ''; ?>>c++
  <input type="checkbox" name="languages[]" value="php" <?php echo (in_array("php", $skills)) ? 'checked' : ''; ?>>php 
  <br>
  <span class="error"><?php echo $skillsErr; ?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">
</form>

<?php

  if (isset($_POST['submit']) && empty($nameErr) && empty($emailErr) && empty($skillsErr) && empty($foodsErr)) {
      echo "<h3>Submitted Information:</h3>";
      echo "<table>
              <tr><th>Name</th><td>$name</td></tr>
              <tr><th>Email</th><td>$email</td></tr>
              <tr><th>Skills</th><td>$skills_output</td></tr>
              <tr><th>Favourite Food</th><td>$foods_output</td></tr>
            </table>";
  }
?>
</body>
</html>
