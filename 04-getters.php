<?php

//getters are methods for getting properties values in case we can't access them directly, we'll talk later about why we couldn't access properties in some scenarios

class Mobile {
    public $name;
    public $chipset;
    public $internalMemory;

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


$modernMobile = new Mobile();
$modernMobile->name = "Samsung s20";
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

echo $modernMobile->getName();
echo "<br>";
echo $modernMobile->getChipset();
echo "<br>";
echo $modernMobile->getInternalMemory();

echo "<br>";
echo "<br>";

//with this scenario there won't be any differences between using getters or accessing  the properties via arrow operator
echo $modernMobile->name;
echo "<br>";
echo $modernMobile->chipset;
echo "<br>";
echo $modernMobile->internalMemory;