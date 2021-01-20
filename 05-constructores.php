<?php

// constructors get called automatically when an object of this class is created

class Mobile {
    public $processor;
    public $internalMemory;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $processor, $internalMemory )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->processor = $processor;
        $this->internalMemory = $internalMemory;
    }

    // methods for getting both properties
    public function getProcessor()
    {
        return $this->processor;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return "This mobile includes a " . $this->processor . " processor and " . $this->precio . "GB of internal memory";
    }
}

// Instantiate a mobile object passing both arguments in the correct order
$modernMobile = new Mobile('Exynos',128);

echo "<pre>";
var_dump($modernMobile);
echo "</pre>";

echo $modernMobile->getSpecs();


$oldMobile = new Mobile('ARM',1);

echo "<pre>";
var_dump($oldMobile);
echo "</pre>";

echo $modernMobile->getSpecs();
