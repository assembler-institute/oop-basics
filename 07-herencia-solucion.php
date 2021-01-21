<?php

class Mobile {
    public $name;
    public $chipset;
    public $internalMemory;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $name, $chipset, $internalMemory )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
    }

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

//When you extend a class, the subclass inherits all of the public and protected methods from the parent class.
class Blackberry extends Mobile{
    public $keyboard;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $name, $chipset, $internalMemory, $keyboard )
    {
        //we use same constructor as father class
        parent::__construct( $name, $chipset, $internalMemory );
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
        return $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory. It uses " . $this->keyboard . " Keyboard";
    }
}

$samsung = new Mobile('Samsung s20','Exynos',128);

echo $samsung->getName();

echo "<pre>";
var_dump($samsung);
echo "</pre>";

echo $samsung->getChipset();
echo "<br>";
echo $samsung->getSpecs();

echo "<br>";
echo "<br>";

$blackberry = new BlackBerry('BlackBerry','ARM',1, 'qwerty');

echo $blackberry->getName();

echo "<pre>";
var_dump($blackberry);
echo "</pre>";

echo $blackberry->getChipset();
echo "<br>";
echo $blackberry->getKeyboard();
echo "<br>";
echo $blackberry->getSpecs();
