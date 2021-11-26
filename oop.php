<?php

# BASE CLASS ------------------
class Board
{
  public static $brand;
  public $modelName;
  public $size;
  public $width;
  public $thickness;
  public $volume;

  # CONSTRUCTOR ------------

  public function __construct(
    string $brand,
    string $modelName,
    string $size,
    string $width,
    string $thickness,
    string $volume

  ) {
    $this->brand = $brand;
    $this->modelName = $modelName;
    $this->size = $size;
    $this->width = $width;
    $this->thickness = $thickness;
    $this->volume = $volume;
  }

  // FUNCTION TO GET BRAND NAME------------------
  public function getBrand()
  {
    return $this->brand;
  }

  // FUNCTION TO GET VOLUME IN LITERS
  public function getVolume()
  {
    return $this->volume;
  }
}



class Surf extends Board
{

  const LOGO = "PYZEL Logo: <img src='https://www.pyzelsurfboards.com/images/logo.png'/>";
  # PROPERTIES ------------------
  public $tailType;
  public $finsSystem;
  public $finsNumber;

  public static $leashHolder = "Standard";

  # METHODS ----------
  # CONSTRUCTOR ------------
  public function __construct(
    string $tailType,
    string $finsSystem,
    int $finsNumber
  ) {
    parent::__construct("Pyzel", "Ghost",  "5' 8''", "18 3/4", "2 5/16", "24,7 Litros");
    $this->tailType = $tailType;
    $this->finsSystem = $finsSystem;
    $this->finsNumber = $finsNumber;
  }


  // FUNCTION TO REMOVE FINS (MIN 0)------------------

  public function removeFins()
  {
    $minFins = "You have removed all your fins";

    if ($this->finsNumber === "You have set all your fins") {
      $this->finsNumber = 4;
    }

    if ($this->finsNumber === 0) {
      $this->finsNumber = $minFins;
    } else if ($this->finsNumber !== 0) {
      $this->finsNumber--;
    }

    return $this->finsNumber;
  }

  // FUNCTION TO ADD MORE FINS (MAX 5)------------------
  public function addFins()
  {
    if ($this->finsNumber === "You have removed all your fins") {
      $this->finsNumber = 1;
    }

    $maxFins = "You have set all your fins";

    if ($this->finsNumber === 5) {
      $this->finsNumber = $maxFins;
    } else if ($this->finsNumber <= 5) {

      $this->finsNumber++;
    }

    return $this->finsNumber;
  }
}


$newSurfboard = new Surf("Round Spin", "Futures", 3);

echo "<pre>";
echo "<img src='https://www.pyzelsurfboards.com/images/logo.png' width='200'";
var_dump($newSurfboard) . "\n";
echo "Leash Holder: " . Surf::$leashHolder;

// echo "This is the volume" . "\n";

// echo $newSurfboard->getVolume();

// echo "<br>";
// echo "<br>";

// echo "Change your Fins!" . "\n";
// echo "Removed 1 fin! Nº of Fins = " . $newSurfboard->removeFins() . "\n";
// echo "<br>";
// echo "Removed 1 fin! Nº of Fins = " . $newSurfboard->removeFins() . "\n";
// echo "<br>";
// echo "Removed 1 fin! Nº of Fins = " . $newSurfboard->removeFins() . "\n";
// echo "<br>";

// echo  $newSurfboard->removeFins() . "\n";

// echo "<br>";

// echo "Added 1 fin! Nº of Fins = " . $newSurfboard->addFins() . "\n";
// echo "<br>";
// echo "Added 1 fin! Nº of Fins = " . $newSurfboard->addFins() . "\n";
// echo "<br>";
// echo "Added 1 fin! Nº of Fins = " . $newSurfboard->addFins() . "\n";
// echo "<br>";
// echo "Added 1 fin! Nº of Fins = " . $newSurfboard->addFins() . "\n";
// echo "<br>";
// echo $newSurfboard->addFins();