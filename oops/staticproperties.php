<?php
class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}
$x = new x();
echo $x->xStatic();

echo x::$value;




?>
