<?php
//classes have properties that contain information about that object/class
class Mobile {
    public $chipset; // Public makes sure we can access this property outside the class.
    public $internalMemory;
}

$modernMobile = new Mobile();
$oldMobile = new Mobile();

// in OOP we use the arrow operator for accessing properties
// we can assign those public properties in our class with this syntax
$modernMobile->chipset = "Exynos";
$modernMobile->internalMemory = 128;

// what happens if we assign a non existing value or a wrong value?
$oldMobile->memoriaRAM = 1;
$oldMobile->internMemory = 8;

echo "<pre>";
var_dump($modernMobile);
var_dump($oldMobile);
echo "</pre>";

// we can also access properties value by the arrow operator
echo $modernMobile->chipset;


// arrow operator is unique in objects and must not be confused with double arrow operator used in arrays
// this is an example using an array and double arrow operators
$mobileArray = [
    'chipset' => 'Snapdragon',
    'internalMemory' => 64
];
echo $mobileArray['chipset'];