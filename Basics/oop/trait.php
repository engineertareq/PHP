<!DOCTYPE html>
<html>
<body>

<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! <br>"; 
  }
  public function msg2() {
    echo "Is'nt easy to uderstand! "; 
  }
}

class Welcome {
  use message1;
}

class Bye {
use message1;
}

$obj = new Welcome();
$obj->msg1();
$obj2 = new Bye();
$obj->msg2();
?>
 
</body>
</html>
