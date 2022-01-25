<?php
//base class
class ClerkSetup
{
    public string $headset;
    public $monitor = "BENQ";
    public $mouse;
    private $setIsWorking;
    public $keyboard;

    public function __construct($headset, $mouse, $keyboard)
    {
        $this->headset = $headset;
        $this->mouse = $mouse;
        $this->keyboard = $keyboard;
    }
    public function getMonitor()
    {
        return $this->monitor;
    }

    public function setIsWorking(bool $boolean)
    {
        $this->isManager =  $boolean;
    }

    public function turnMonitorOn()
    {
        echo "Your monitor " . $this->monitor . " is on. TIME TO WORK!";
    }
    public function __destruct()
    {
        echo "<br>Turning monitor off before going out of the work";
    }
}
//inherit class
class GamerSetup extends ClerkSetup
{
    public static $chair = "Gaming chair";
    public $monitor = "ASUS ROG STRIX";
    public $hasConsole;
    function __construct($headset, $mouse, $keyboard)
    {
        parent::__construct($mouse, $keyboard, $headset);
        $this->headset = $headset;
    }
    function turnMonitorOn()
    {
        echo "<br>Setting hz to the right frequence..";
    }
    function setHasConsole(bool $boolean)
    {
        $this->hasConsole = $boolean;
    }
    function __destruct()
    {
        echo "<br> turning monitor off before you disconnecting your gaming pc";
    }
}

$mark = new ClerkSetup("earPods", "BENQ", "logitech", "logitech");

$mark->turnMonitorOn();

$mark->setIsWorking(true);

$gamer1 = new GamerSetup("Logitech g435", "ZOWIE 144hz", "G PRO", "newskill");

print_r($gamer1);

GamerSetup::$chair;

//abstract class
abstract class Computer
{
    public $cpu;
    public $gpu;
    public $motherboard;
    public $case;
    public function turnComputerOn()
    {
        echo "turning computer on";
    }
    public function changeGpu($newgpu)
    {
        $this->gpu = $newgpu;
    }
}

class Laptop extends Computer
{
    public $batery;
    //etc...
}

interface gameUI
{
    public function startGame();
    public function updateGame();
    public function exitGame();
    public function searchMatch();
}

class Game implements gameUI
{
    public function startGame()
    {
        echo "Starting game...";
    }
    public function updateGame()
    {
        echo "Updating, please wait...";
    }
    public function exitGame()
    {
        echo "come back later...";
    }
    public function searchMatch()
    {
        echo "Searching match..";
    }
}
