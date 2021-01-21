<?php

// in a class we have properties and methods. This methods act as functions and allow classes to develop tasks and functionalities.

class Mobile {
    public $name;
    public $chipset;
    public $internalMemory;

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory";
    }
}


$modernMobile = new Mobile();
$modernMobile->name = "Samsung s20";
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

echo $modernMobile->getSpecs();

