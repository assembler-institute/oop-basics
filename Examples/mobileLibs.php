<?php 

//we set namespace name
namespace Lib;

// External library interface with same name as main one
interface mobileApp {
    // Interfaces cannot have properties

    // All interface methods must be public
    public static function showSplashScreen();
    public static function getData();
    public static function showData();
}

// External library classes with also same name
class assemblerApp implements mobileApp{

    const APPNAME = 'LIB APP';
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


class Internet {
    const SERVER = '122.23.4.9';

    public static function connectInternet()
    {
        return "connecting to " . self::SERVER . "...";
    }
}