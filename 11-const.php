<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 11 - Constants */

// constants are unchangeable, we can use the word const to create them. The default visibility of class constants is public.
const APPNAME = 'ASSEMBLER APP';

class Internet
{
    const SERVER = '122.23.4.5';

    public static function connectInternet()
    {
        // We can refer to constants inside our class with self and double colon
        return "connecting to " . self::SERVER . "...";
    }
}

class Mobile
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

    // We can access constants with just name
    public function runMobileApp()
    {
        return $this->name . " RUNS " . APPNAME . " : " . Internet::connectInternet();
    }
}

$samsung = new Mobile('Samsung s20', 'Exynos', 128, '000111222333');
echo $samsung->runMobileApp();
