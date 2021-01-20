<?php

//getters are methods for getting properties values in case we can't access them directly, we'll talk later about why we couldn't access properties in some scenarios

class Mobile {
    public $chipset;
    public $internalMemory;

    // methods for getting both properties
    public function getProcessor()
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
        return "This mobile includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory";
    }
}


$modernMobile = new Mobile();

$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;


echo $modernMobile->getProcessor();
echo $modernMobile->getInternalMemory();

//with this scenario there won't be any differences between using getters or accessing  the properties via arrow operator

echo $modernMobile->chipset;
echo $modernMobile->internalMemory;