<?php
class A {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class B extends A {
  public function message() {
    echo "im class B ";
  }
}


$object = new B("sample1", "sample2");  
$object->message(); 
$object->intro();
?>
