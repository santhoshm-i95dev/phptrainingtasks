<?php

abstract class A {
  // public $name;
  // public $color;
  // public function __construct($name, $color) {
  //  $this->name = $name;
  //  $this->color = $color;
  // }
 abstract public function intro() ;
}

class B extends A {
  public function intro() {
    echo " This class is abstract and class ";
  }
}


$object = new B();   
$object->intro();
?>
