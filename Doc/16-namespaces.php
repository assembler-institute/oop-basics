<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 16 - Namespaces */

// Namespaces are designed to solve two problems we encounter when creating re-usable code elements such as classes or functions:
// - Name collisions between code you create, and internal PHP classes/functions/constants or third-party classes/functions/constants.
// - Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem, improving readability of source code.

// imagine we need an external library for implementing some tasks in our mobile classes
// inside mobileLibs there's already an interface named iMobileApp so if we run this php we will get an error:
// Fatal error: Cannot declare interface iMobileApp, because the name is already in use in D:\xampp\htdocs\assembler-school\oop-basics\mobileLibs.php on line 4
// we have to add a namespace in mobileLibs

include 'mobileLibs.php';

interface iMobileApp
{
    public static function showSplashScreen();
    public static function getData();
    public static function showData();
}

class AssemblerApp implements iMobileApp
{

    const APPNAME = 'ASSEMBLER APP';
    public static $data;

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

    public static function  exitApp()
    {
        echo "@@@ BYE " . self::APPNAME . " BYE @@@";
    }
}

class Internet
{
    const SERVER = '122.23.4.5';

    public static function connectInternet()
    {
        return "connecting to " . self::SERVER . "...";
    }
}

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

    public function runAssemblerApp()
    {
        echo "<br>";
        AssemblerApp::showSplashScreen();
        echo "<br>";
        AssemblerApp::getData();
        AssemblerApp::showData();
        echo "<br>";
        AssemblerApp::exitApp();
    }

    public function runAssemblerAppLib()
    {
        // We use the namespace for calling our library methods
        Lib\AssemblerApp::showSplashScreen();
        echo "<br>";
        Lib\AssemblerApp::getData();
        Lib\AssemblerApp::showData();
        echo "<br>";
        Lib\AssemblerApp::exitApp();
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
echo $blackberry->runAssemblerApp();
echo "<br><br>";
echo $blackberry->runAssemblerAppLib();
