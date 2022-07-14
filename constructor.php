

<?php
class man {
  // Properties
  public $reading;
  public $walking;

  // Methods
  function __construct($reading) {
    $this->reading = $reading;
  }
  function human2() {
    return $this->reading;
  }
}

$object1 = new man('walking');



echo $object1->human2();

?>
