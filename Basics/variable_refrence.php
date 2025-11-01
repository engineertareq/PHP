<?php
$var1 = "Hello Tareq<br>";
$var2 = $var1;
$var2 = "We're doing something else";
echo $var1, $var2;
?>
<hr>
<?php
$var1 = "Hello Tareq<br>";
$var2 = & $var1;
$var2 = "We're doing something else<br>";
echo $var1, $var2;
?>