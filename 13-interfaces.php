<?php
//======================================================================
// ASSEMBLER SCHOOL - PHP Object Oriented Programming
//======================================================================

/* File 13 - Interfaces */

// Interfaces allows specifying what methods a class should implement.
// they make it easy to use a variety of different classes in the same way.
// When one or more classes use the same interface, it is referred to as "polymorphism".
// Interfaces are declared with the interface keyword
interface iMobileApp
{
    // Interfaces cannot have properties

    // All interface methods must be public
    public function showSplashScreen();
    public function login($username, $password);
    public function saveData();
    public function logout();
}

// To implement an interface, the implements operator is used
class AssemblerApp implements iMobileApp
{

    const APPNAME = 'ASSEMBLER APP';
    private $username;
    private $password;
    public $data;

    // We have to declare every method described in the interface. If we miss a method we'll get a fatal error:
    // Fatal error: Class AssemblerApp contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (mobileApp::methodName)
    public function showSplashScreen()
    {
        return "¡Welcome to " . self::APPNAME . "!\n";
    }

    public function login($username, $password)
    {
        $this->username = $username;
        $this->paassword = $password;

        return "¡Loggin succesful with $this->username!\n";
    }

    public function saveData()
    {
        return "¡The user has successfully saved the information!\n";
    }

    public function logout()
    {
        $this->username = null;
        $this->paassword = null;

        return "¡The user has successfully logged out the application!\n";
    }

    // We can add methods not present in the interface
    public function  exitApp()
    {
        echo "Clossing " . self::APPNAME . "...";
    }
}

$app = new AssemblerApp();

echo $app->showSplashScreen();
echo $app->login("XxProAssemblerxX", "123456");
echo $app->saveData();
echo $app->logout();
echo $app->exitApp();
