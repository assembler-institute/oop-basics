<?php

// constructors get called automatically when an object of this class is created

class Mobile {
    public $name;
    public $chipset;
    public $internalMemory;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $name, $chipset, $internalMemory )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
    }

    // methods for getting properties
    public function getName()
    {
        return "---".$this->name."---";
    }

    public function getChipset()
    {
        return $this->chipset;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory";
    }
}

// Instantiate a mobile object passing both arguments in the correct order
$modernMobile = new Mobile('Samsung s20','Exynos',128);

echo $modernMobile->getName();

echo "<pre>";
var_dump($modernMobile);
echo "</pre>";

echo $modernMobile->getSpecs();

echo "<br>";
echo "<br>";

$oldMobile = new Mobile('BlackBerry','ARM',1);

echo $oldMobile->getName();

echo "<pre>";
var_dump($oldMobile);
echo "</pre>";

echo $oldMobile->getSpecs();
