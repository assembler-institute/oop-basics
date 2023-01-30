<?php
// Parent class
abstract class Feline {
  public $name;
  public $whiskerType;

  public function __construct(string $name, string $whiskerType) {
    $this->name = $name;
    $this->whiskerType = $whiskerType;
  }
  abstract public function whoAreYou() : string;
}

// Child classes
class Leon extends Feline {
  public function whoAreYou() : string {
    return "I'm a king! I'm a $this->name!";
  }
}

class Pantera extends Feline {
  public function whoAreYou() : string {
    return "I'm a very fast ! I'm a $this->name!";
  }
}

class Tiger extends Feline {
  public function whoAreYou() : string {
    return "I'm a cute! I'm a $this->name!";
  }
}

// Create objects from the child classes
/*$leon = new Leon("Leon", "long");
echo $leon->whoAreYou();
echo "<br>";

$pantera = new Pantera("Pantera", "median");
echo $pantera->whoAreYou();
echo "<br>";

$tiger = new Tiger("Tiger", "very long");
echo $tiger->whoAreYou();*/
?>
