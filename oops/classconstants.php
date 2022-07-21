<?php
class A {
  const constmessage = "this is self  constant";
  public function cm() {
    echo self::constmessage;
  }
}
echo A::constmessage ; echo "<br>";
$obj = new A();
$obj->cm();



?>
