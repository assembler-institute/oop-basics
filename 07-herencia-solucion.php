<?php

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


//When you extend a class, the subclass inherits all of the public and protected methods from the parent class.
class Samsung extends Mobile{
    public $android;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $processor, $internalMemory, $android )
    {
        //we use same constructor as father class
        parent::__construct( $processor, $internalMemory );
        // and add new arguments necessary for the new son class
        $this->android = $android;
    }

    //new method for getting ios version
    public function getAndroid()
    {
        return $this->android;
    }

    // we override getSpecs in this class
    public function getSpecs()
    {
        return "This Android Mobile includes a " . $this->processor . " processor and " . $this->precio . "GB of internal memory. It uses Android ".$this->android;
    }
}

//When you extend a class, the subclass inherits all of the public and protected methods from the parent class.
class Iphone extends Mobile{
    public $ios;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $processor, $internalMemory, $ios )
    {
        //we use same constructor as father class
        parent::__construct( $processor, $internalMemory );
        // and add new arguments necessary for the new son class
        $this->ios = $ios;
    }

    //new method for getting ios version
    public function getIos()
    {
        return $this->ios;
    }

    // we override getSpecs in this class
    public function getSpecs()
    {
        return "This iPhone includes a " . $this->processor . " processor and " . $this->precio . "GB of internal memory. It uses iOS ".$this->ios;
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