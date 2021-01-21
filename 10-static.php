<?php
// static methods can be called without creating an instance of the class and are declared with the static keyword
class Internet {
    public static function connectInternet()
    {
        return "connecting to the internet...";
    }

    //self word can be used to call static elements inside the same class
    public function __construct() {
        echo self::connectInternet();
    }
}

echo "<br>";
new Internet();
echo "<br>";

class Mobile {
    public $name;
    protected $chipset;  //protected elements can be accessed only within the class itself and by inheriting and parent classes.
    protected $internalMemory;

    private $imei; //private elements may only be accessed by the class that defines the member.

    //public elements can be accessed everywhere

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $name, $chipset, $internalMemory, $imei )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        $this->imei = $imei;
    }

    public function connectMobileInternet()
    {
        return $this->name . " : " .Internet::connectInternet();
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

    public function getIMEI()
    {
        return $this->imei;
    }

    // method that returns both properties in a string.
    public function getSpecs()
    {
        return $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory";
    }

    //methods for changing properties
    public function setInternalMemory($internalMemory)
    {
        echo "Changed internal memory from " . $this->internalMemory;
        $this->internalMemory = $internalMemory;
        echo " to ".$this->internalMemory;
    }

}

//When you extend a class, the subclass inherits all of the public and protected methods from the parent class.
class Blackberry extends Mobile{
    public $keyboard;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $name, $chipset, $internalMemory, $imei, $keyboard )
    {
        //we use same constructor as father class
        parent::__construct( $name, $chipset, $internalMemory, $imei );
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

$blackberry = new BlackBerry('BlackBerry','ARM',1,'99966688555','qwerty');

echo $blackberry->getName();

echo "<pre>";
var_dump($blackberry);
echo "</pre>";

echo $blackberry->getChipset();
echo "<br>";
echo $blackberry->getKeyboard();
echo "<br>";
echo $blackberry->getSpecs();
echo "<br>";
echo $blackberry->connectMobileInternet();
