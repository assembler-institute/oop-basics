<?php

// There are 4 basic principles in OOP
// Inheritance, Encapsulation, Abstraction and Polymorphism

//Lets see this example to talk about Inheritance

class Mobile {
    public $processor;
    public $internalMemory;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $processor, $internalMemory )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->processor = $processor;
        $this->internalMemory = $internalMemory;
    }

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


class Samsung {
    public $processor;
    public $internalMemory;
    public $android;


    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $processor, $internalMemory, $android )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->processor = $processor;
        $this->internalMemory = $internalMemory;
        $this->android = $android;
    }

    // methods for getting both properties
    public function getProcessor()
    {
        return $this->processor;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    public function getAndroid()
    {
        return $this->android;
    }

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return "This mobile includes a " . $this->processor . " processor and " . $this->precio . "GB of internal memory. It uses Android ".$this->android;
    }
}

class Iphone {
    public $processor;
    public $internalMemory;
    public $ios;


    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $processor, $internalMemory, $ios )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->processor = $processor;
        $this->internalMemory = $internalMemory;
        $this->ios = $ios;
    }

    // methods for getting both properties
    public function getProcessor()
    {
        return $this->processor;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    public function getIos()
    {
        return $this->ios;
    }

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return "This mobile includes a " . $this->processor . " processor and " . $this->precio . "GB of internal memory. It uses iOS ".$this->ios;
    }
}

$samsung = new Samsung('Exynos',128, 10.0); 

echo "<pre>";
var_dump($samsung);
echo "</pre>";
echo $samsung->getProcessor();
echo $samsung->getIos();


$iphone = new Iphone('A14 Bionic',128, 14.1); 
echo "<pre>";
var_dump($iphone);
echo "</pre>";
echo $iphone->getProcessor();
echo $iphone->getIos();