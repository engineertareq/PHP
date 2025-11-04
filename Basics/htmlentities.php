<!DOCTYPE html>
<html>
<body>

<?php
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);
?>

<p>Converting characters into entities are often used to prevent browsers from using it as an HTML element. This can be especially useful to prevent code from running when users have access to display input on your homepage.</p>

</body>
</html>