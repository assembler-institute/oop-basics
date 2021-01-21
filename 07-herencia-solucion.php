<?php

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
        return "This mobile includes a " . $this->chipset . " chipset and " . $this->precio . "GB of internal memory";
    }
}

//When you extend a class, the subclass inherits all of the public and protected methods from the parent class.
class Blackberry extends Mobile{
    public $keyboard;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $chipset, $internalMemory, $keyboard )
    {
        //we use same constructor as father class
        parent::__construct( $chipset, $internalMemory );
        // and add new arguments necessary for the new son class
        $this->keyboard = $keyboard;
    }

    //new method for getting keyboard type
    public function getKeyboard()
    {
        return $this->keyboard;
    }

    // we override getSpecs in this class
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