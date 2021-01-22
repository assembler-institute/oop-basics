<?php 
namespace Lib;

interface mobileApp {
    // Interfaces cannot have properties

    // All interface methods must be public
    public static function showSplashScreen();
    public static function getData();
    public static function showData();
}

//external library interface
class assemblerApp implements mobileApp{

    const APPSERVER = '132.2.33.4';
    const APPNAME = 'ASSEMBLER APP LIB';

    public static $data;

    public static function showSplashScreen()
    {
        echo "---" . self::APPNAME . "---";
    }

    public static function getData()
    {
        self::$data = self::APPNAME . " connecting to " . Internet::connectApp(self::APPSERVER);
    }

    public static function showData()
    {
        echo self::$data;
    }
}

class Internet {

    public static function connectInternet()
    {
        return "connecting to the internet...";
    }

    public static function connectApp($server)
    {
        //we can use constants inside our class with self and double colon
        return "connecting to " . $server . "...";
    }

    //self word can be used to call static elements inside the same class
    public function __construct() {
        echo self::connectInternet();
    }
}