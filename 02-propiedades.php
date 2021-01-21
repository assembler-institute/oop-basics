<?php
//classes have properties that contain information about that object/class
class Mobile {
    public $name;
    public $chipset; // Public makes sure we can access this property outside the class.
    public $internalMemory;
}

$modernMobile = new Mobile();

// in OOP we use the arrow operator for accessing properties
// we can assign those public properties in our class with this syntax
$modernMobile->name = "Samsung s20";
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

// what happens if we assign a non existing value or a wrong value?
$modernMobile->ramMemory = 1;
$modernMobile->internMemory = 8;

echo "<pre>";
var_dump($modernMobile);
echo "</pre>";

echo "<br>";
// we can also access properties value by the arrow operator
echo $modernMobile->chipset;
echo "<br>";

// arrow operator is unique in objects and must not be confused with double arrow operator used in arrays
// this is an example using an array and double arrow operators
$mobileArray = [
    'name' => 'Xiaomi Mi10',
    'chipset' => 'Snapdragon',
    'internalMemory' => 64
];
echo $mobileArray['chipset'];