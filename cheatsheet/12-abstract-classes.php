<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 12 - Abstract classes */

// An abstract class cannot be instantiated, only inherited. We can declare an abstract class with the keyword abstract.
// When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child.
const APPNAME = 'ASSEMBLER APP';

class Internet
{
    const SERVER = '122.23.4.5';

    public static function connectInternet()
    {
        return "connecting to " . self::SERVER . "...";
    }
}

// We convert Mobile class into an abstract class
abstract class Mobile
{
    public $name;
    protected $chipset;
    protected $internalMemory;
    private $imei;

    public function __construct($name, $chipset, $internalMemory, $imei)
    {
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        $this->imei = $imei;
        echo "+ CREATED " . $this->name . " WITH " . $this->internalMemory . " INTERNAL MEMORY +<br>";
    }

    public function runMobileApp()
    {
        return $this->name . " RUNS " . APPNAME . " : " . Internet::connectInternet();
    }
}

class Blackberry extends Mobile
{
    public $keyboard;

    public function __construct($name, $chipset, $internalMemory, $imei, $keyboard)
    {
        parent::__construct($name, $chipset, $internalMemory, $imei);
        $this->keyboard = $keyboard;
    }
}

$blackberry = new BlackBerry('BlackBerry', 'ARM', 1, '99966688555', 'qwerty');
echo $blackberry->runMobileApp();

// We cannot instantiate an abstract class by itself!!
$samsung = new Mobile('Samsung s20', 'Exynos', 128, '000111222333'); // Fatal error: Uncaught Error: Cannot instantiate abstract class Mobile