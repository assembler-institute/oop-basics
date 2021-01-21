<?php

// There are 4 basic principles in OOP
// Inheritance, Encapsulation, Abstraction and Polymorphism

//Lets see this example to talk about Inheritance

class Mobile {
    public $chipset;
    public $internalMemory;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $chipset, $internalMemory )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
    }

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

//We need a class for mobiles with extra properties and methods that won't have every mobile 
//For example we could need a class for a mobile device with physical keyboard so we create a new one

class Blackberry {
    public $chipset;
    public $internalMemory;
    public $keyboard;


    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $chipset, $internalMemory, $keyboard )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        $this->keyboard = $keyboard;
    }

    // methods for getting both properties
    public function getProcessor()
    {
        return $this->chipset;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    //new method for getting keyboard type
    public function getKeyboard()
    {
        return $this->keyboard;
    }

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return "This mobile includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory. It uses " . $this->keyboard . " Keyboard";
    }
}

$iphone = new Mobile('A12 Bionic',64);

echo "<pre>";
var_dump($iphone);
echo "</pre>";
echo $iphone->getSpecs();


$blackberry = new BlackBerry('Qualcomm',128, 'qwerty');

echo "<pre>";
var_dump($blackberry);
echo "</pre>";
echo $blackberry->getProcessor();
echo $blackberry->getKeyboard();
echo $blackberry->getSpecs();