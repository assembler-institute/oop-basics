<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 14 - Overloading */

// Function overloading contains same function name and that function performs
// different task according to number of arguments. Like other OOP languages
// function overloading can not be done by native approach.
// In PHP function overloading is done with the help of magic function __call().
// This function takes function name and arguments.

class App
{
    public $dni;
    public $name;

    // The "__call" method will be called when it cannot find the method that the user is trying to call.
    function __call($methodName, $arguments)
    {
        switch ($methodName) {
                // Here we see if the method introduced by the user exists in our casuistry
            case $methodName == "login":
                if ($arguments != null) {
                    if (count($arguments) == 2 && is_int($arguments[0])) {
                        return call_user_func_array(array($this, "loginShortDNI"), $arguments);
                    } else if (is_string($arguments[0])) {
                        return call_user_func_array(array($this, "loginFullDNI"), $arguments);
                    }
                }
                break;
        }
    }

    public function loginShortDNI(int $dni, string $name)
    {
        $this->dni = $dni;
        $this->name = $name;
        return "¡Login with short DNI!";
    }

    public function loginFullDNI(string $dni)
    {
        $this->dni = $dni;
        return "¡Login with full DNI!";
    }
}

$app = new App();
echo $app->login(53123456, "Pau") . "\n";
echo $app->login("53123456K");
