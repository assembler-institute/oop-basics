<?php

//getters are methods for getting properties values in case we can't access them directly, we'll talk later about why we couldn't access properties in some scenarios

class Mobile {
    public $processor;
    public $internalMemory;

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


$modernMobile = new Mobile();

$modernMobile->processor = "Exynos";
$modernMobile->internalMemory = 128;


echo $modernMobile->getProcessor();
echo $modernMobile->getInternalMemory();

//with this scenario there won't be any differences between using getters or accessing  the properties via arrow operator

echo $modernMobile->processor;
echo $modernMobile->internalMemory;