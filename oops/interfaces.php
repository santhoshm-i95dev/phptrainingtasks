<?php
interface A {
  public function someMethod1();
 
}


class B implements A {

public function someMethod1(){
echo "this is method 1 inteface";

}
}

$object = new B();
$object->someMethod1();

?>
