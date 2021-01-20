<?php
//classes have properties that contain information about that object/class
class Mobile {
    public $processor; // Public makes sure we can access this property outside the class.
    public $internalMemory;
}

$modernMobile = new Mobile();
$oldMobile = new Mobile();

// in OOP we use the double arrow operator for accessing properties
// we can assign those public properties in our class with this syntax
$modernMobile->processor = "Exynos";
$modernMobile->internalMemory = 128;

// what happens if we assign a non existing value or a wrong value?
$oldMobile->memoriaRAM = 1;
$oldMobile->internMemory = 8;

echo "<pre>";
var_dump($modernMobile);
var_dump($oldMobile);
echo "</pre>";

// we can also access properties value by double arrow operator
echo $modernMobile->processor;


//NO ENTIENDO ESTO LA VERDAD, en arrays tambien se puede usar y parece como que dice que no?¿ -------------------------------------------------------

// la sintaxis de flecha es propia de los objetos, en el caso de un arreglo por ejemplo
$bebidaArreglo = [
    'nombre' => 'Nombre de la bebida',
    'precio' => 30
];
echo $bebidaArreglo['nombre'];