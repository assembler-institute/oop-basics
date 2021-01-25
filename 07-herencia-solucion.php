<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 07 - Inheritance solution */

// Let's apply inheritance in latest example

class Mobile {
    public $name;
    public $chipset;
    public $internalMemory;

    public function __construct( $name, $chipset, $internalMemory )
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name = $name;
        $this->chipset = $chipset;
        $this->internalMemory = $internalMemory;
        echo "+ " . $this->name . " CREATED +<br>";
    }

    function __destruct() {
        echo "- DESTROYED : " . $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory -<br>";
    }
}

//When you extend a class, the subclass inherits all of the public and protected methods from the parent class.
class Blackberry extends Mobile{
    public $keyboard;

    // in php we use __construct to tell our class that this is the constructor method
    public function __construct( $name, $chipset, $internalMemory, $keyboard )
    {
        //we use same constructor as father class
        parent::__construct( $name, $chipset, $internalMemory );
        // and add new arguments necessary for the new son class
        $this->keyboard = $keyboard;
    }

    function __destruct() {
        echo "- DESTROYED : " . $this->name . " includes a " . $this->chipset . " chipset and " . $this->internalMemory . "GB of internal memory. It uses " . $this->keyboard . " Keyboard -<br>";
    }
}

$samsung = new Mobile('Samsung s20','Exynos',128);
$blackberry = new BlackBerry('BlackBerry','ARM',1, 'qwerty');
echo "<br>";