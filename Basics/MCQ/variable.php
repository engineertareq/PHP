<?php
$str = "good";
$$str = "bye";
echo ${$str};
echo $_SERVER['REMOTE_ADDR'];
?>