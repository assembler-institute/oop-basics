<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 13 - Interfaces */

// Interfaces allows specifying what methods a class should implement.
// they make it easy to use a variety of different classes in the same way.
// When one or more classes use the same interface, it is referred to as "polymorphism".
// Interfaces are declared with the interface keyword
interface mobileApp {
    // Interfaces cannot have properties

    // All interface methods must be public
    public static function showSplashScreen();
    public static function getData();
    public static function showData();
}

// To implement an interface, the implements operator is used
class assemblerApp implements mobileApp{

    const APPNAME = 'ASSEMBLER APP';
    public static $data;

    // We have to declare every method described in the interface. If we miss a method we'll get a fatal error:
    // Fatal error: Class assemblerApp contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (mobileApp::methodName)
    public static function showSplashScreen()
    {
        echo "@@@ " . self::APPNAME . " @@@";
    }

    public static function getData()
    {
        self::$data = self::APPNAME . " " . Internet::connectInternet();
    }

    public static function showData()
    {
        echo self::$data;
    }

    // We can add methods not present in the interface
    public static function  exitApp()
    {
        echo "@@@ BYE " . self::APPNAME . " BYE @@@";
    }
}

class Internet {
    const SERVER = '122.23.4.5';

    public static function connectInternet()
    {
        return "connecting to " . self::SERVER . "...";
    }
}

abstract class Mobile {
    public $name;
    protected $chipset;
    protected $internalMemory;
    private $imei;

    public function __construct( $name, $chipset, $internalMemory, $imei )
    {
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        $this->imei = $imei;
        echo "+ CREATED " . $this->name . " WITH " . $this->internalMemory . " INTERNAL MEMORY +<br>";
    }

    public function runAssemblerApp()
    {
        echo "<br>";
        assemblerApp::showSplashScreen();
        echo "<br>";
        assemblerApp::getData();
        assemblerApp::showData();
        echo "<br>";
        assemblerApp::exitApp();
    }
}

class Blackberry extends Mobile{
    public $keyboard;

    public function __construct( $name, $chipset, $internalMemory, $imei, $keyboard )
    {
        parent::__construct( $name, $chipset, $internalMemory, $imei );
        $this->keyboard = $keyboard;
    }
}

$blackberry = new BlackBerry('BlackBerry','ARM',1,'99966688555','qwerty');
echo $blackberry->runAssemblerApp();