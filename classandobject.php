<?php
class man {
  // Properties
  public $reading;
  public $walking;

  // Methods
  function human1($reading) {
    $this->reading = $reading;
  }
  function human2() {
    return $this->reading;
  }
}

$object1 = new man();
$object2 = new man();
$object1->human1('walking');
$object2->human1('reading');

echo $object1->human2();
echo "<br>";
echo $object2->human2();
?>
