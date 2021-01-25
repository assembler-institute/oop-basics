<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 09 - Setters */

// Setters are methods for modifying properties values
class Mobile {
    public $name;
    private $chipset;
    private $internalMemory;
    private $imei;

    public function __construct( $name, $chipset, $internalMemory, $imei )
    {
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        $this->imei = $imei;
        echo "+ CREATED " . $this->name . " WITH " . $this->internalMemory . " INTERNAL MEMORY +<br>";
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    // setters are methods for changing properties
    public function setInternalMemory($internalMemory)
    {
        echo "* CHANGED internal memory from " . $this->internalMemory;
        $this->internalMemory = $internalMemory;
        echo " to ".$this->internalMemory;
    }

    function __destruct() {
        echo "- DESTROYED : " . $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory -<br>";
    }

}

$samsung = new Mobile('Samsung s20','Exynos',128,'000111222333');
$samsung->setInternalMemory(256);
echo "<br>";