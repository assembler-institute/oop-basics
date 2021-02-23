<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 14 - Overriding */

// In function overriding, both parent and child classes should have
// same function name with and number of arguments. It is used to replace
// parent method in child class. The purpose of overriding is to change
// the behavior of parent class method. The two methods with the same
// name and same parameter is called overriding.

class iPhone
{
    public $name;
    public $internalMemory;

    public function __construct($name, $internalMemory)
    {
        $this->name = $name;
        $this->internalMemory = $internalMemory;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }
}

// When you extend a class, the subclass inherits all of the public and protected methods from the parent class.
class iPhonePlus extends iPhone
{
    //Here we are overriding this method adding extra features that the previous "getName" doesn't have.
    public function getName()
    {
        return "¡The name of this iPhone is $this->name!";
    }
}

$iPhone = new iPhone("iPhone X", "64");
echo $iPhone->getName() . "\n";

$iPhonePlus = new iPhonePlus("iPhone X Plus", "128");
echo $iPhonePlus->getName();
