<?php

// in a class we have properties and methods. This methods act as functions and allow classes to develop tasks and functionalities.

class Mobile {
    public $chipset;
    public $internalMemory;

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return "This mobile includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory";
    }
}


$modernMobile = new Mobile();

$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

echo $modernMobile->getSpecs();

