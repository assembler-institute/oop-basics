<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");

class Device
{
    private $name;
    private $serialNumber;
    private $internalMemory;

    public function __construct($name, $serialNumber, $internalMemory)
    {
        $this->name = $name;
        $this->serialNumber = $serialNumber;
        $this->internalMemory = $internalMemory;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setSerialNumber($serialNumber)
    {
        return $this->serialNumber = $serialNumber;
    }

    public function setInternalMemory($internalMemory)
    {
        return $this->internalMemory = $internalMemory;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function getInternalMemory()
    {
        return $this->internalMemory;
    }
}


class Mobile extends Device
{
    private $camera;

    public function __construct($name, $serialNumber, $internalMemory, $camera)
    {
        parent::__construct($name, $serialNumber, $internalMemory);
        $this->camera = $camera;
    }


    public function setCamera($camera)
    {
        return $this->camera = $camera;
    }

    public function getCamera()
    {
        return $this->camera;
    }
}

class Tablet extends Device
{
    private $keyboard;

    public function __construct($name, $serialNumber, $internalMemory, $keyboard)
    {
        parent::__construct($name, $serialNumber, $internalMemory);
        $this->keyboard = $keyboard;
    }

    public function setKeyboard($keyboard)
    {
        return $this->keyboard = $keyboard;
    }

    public function getKeyboard()
    {
        return $this->keyboard;
    }
}


class DeviceManager
{
    public function getDeviceSerialNumber(Device $device)
    {
        return $device->getSerialNumber();
    }
}


$mobileObj = new Mobile("iPhone 12", "F9Q342T5DA2S", "64GB", "12-megapixel");
$tabletObj = new Tablet("iPad pro", "T4D6GH3E21D", "128GB", "Magic Keyboard");

$deviceManager = new DeviceManager();

echo "<h1>Exercise_2</h1> <br><br>";
echo "<h3>Mobile Name: " . $mobileObj->getName() . "</h3>";
echo  "<h3>Mobile Serial Number: " . $deviceManager->getDeviceSerialNumber($mobileObj) . "</h3>";
echo "<h3>Mobile Memory: " . $mobileObj->getInternalMemory() . "</h3>";
echo  "<h3>Mobile Camera: " . $mobileObj->getCamera() . "</h3>";

echo "<br><br>";
echo "<h3>Tablet Name: " . $tabletObj->getName() . "</h3>";
echo "<h3>Tablet Serial Number: " . $deviceManager->getDeviceSerialNumber($tabletObj) . "</h3>";
echo "<h3>Tablet Memory: " . $tabletObj->getInternalMemory() . "</h3>";
echo "<h3>Tablet Memory: " . $tabletObj->getKeyboard() . "</h3>";
