<?php
// namespaces are designed to solve two problems we encounter when creating re-usable code elements such as classes or functions:
// Name collisions between code you create, and internal PHP classes/functions/constants or third-party classes/functions/constants.
// Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem, improving readability of source code.

// imagine we need an external library for implementing some tasks in our mobile classes


// inside mobileLibs there's already an interface named mobile App so if we run this php we will get an error:
// Fatal error: Cannot declare interface mobileApp, because the name is already in use in D:\xampp\htdocs\assembler-school\oop-basics\mobileLibs.php on line 4
// we have to add a namespace in mobileLibs

include 'mobileLibs.php';

interface mobileApp {
    // Interfaces cannot have properties

    // All interface methods must be public
    public static function showSplashScreen();
    public static function getData();
    public static function showData();
}

//To implement an interface, the implements operator is used
class assemblerApp implements mobileApp{

    const APPSERVER = '132.2.33.4';
    const APPNAME = 'ASSEMBLER APP';

    public static $data;

    public static function showSplashScreen()
    {
        echo "---" . self::APPNAME . "---";
    }

    public static function getData()
    {
        self::$data = self::APPNAME . " connecting to " . Internet::connectApp(self::APPSERVER);
    }

    public static function showData()
    {
        echo self::$data;
    }
}

class Internet {

    public static function connectInternet()
    {
        return "connecting to the internet...";
    }

    public static function connectApp($server)
    {
        //we can use constants inside our class with self and double colon
        return "connecting to " . $server . "...";
    }

    //self word can be used to call static elements inside the same class
    public function __construct() {
        echo self::connectInternet();
    }
}

abstract class Mobile {
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

    public function runAssemblerApp()
    {

        assemblerApp::showSplashScreen();
        echo "<br>";
        assemblerApp::getData();
        assemblerApp::showData();
    }

    public function runAssemblerAppLib()
    {

        Lib\assemblerApp::showSplashScreen();
        echo "<br>";
        Lib\assemblerApp::getData();
        Lib\assemblerApp::showData();
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
echo $blackberry->runAssemblerApp();
echo "<br>";
echo $blackberry->runAssemblerAppLib();