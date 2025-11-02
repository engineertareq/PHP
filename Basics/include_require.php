<!-- include provide warning error if there is anything wrong in code & nxt part of the code will work -->
<?php
include ("if_else.php");
?>
<!-- Take only one time -->
<?php
include_once("heredoc.php");
?>
<!-- Take only one time -->
<?php
include_once("heredoc.php");
?>

<!-- REuire provide fatal error if there is anything wrong in code & nxt part of the code will not work -->
 <!-- We will use it most of the when we\ll work with db -->
<?php
require("if_else.php");
?>
<?php
require_once("if_else.php");
?>
