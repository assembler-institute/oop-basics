<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 10 - Static Methods */

// static methods can be called without creating an instance of the class and are declared with the static keyword
class Internet {
    public static function connectInternet()
    {
        return "connecting to the internet...";
    }

    // self word must be used to call static elements inside the same class
    public function __construct() {
        echo self::connectInternet();
    }
}

class Mobile {
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

    public function connectMobileInternet()
    {
        // we can call static methods without instantiating directly with class name and double colon
        return $this->name . " : " .Internet::connectInternet();
    }
}

// we can instantiate classes with static methods
echo "<br>";
$internet = new Internet();
echo "<br><br>";


$samsung = new Mobile('Samsung s20','Exynos',128,'000111222333');
echo $samsung->connectMobileInternet();
