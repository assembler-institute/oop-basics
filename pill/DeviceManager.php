<?php

require_once "Device.php";
require_once "Mobile.php";
require_once "Tablet.php";

class DeviceManager
{
    protected int $serialNo;

    public function __construct($device)
    {
        $this->getDeviceSerialNumber($device);
    }

    public function getDeviceSerialNumber(Device $device)
    {
        return $this->serialNo = $device->getSerialNumber();
    }
}

// Mobile Objects
$samsungS8 = new Mobile(215184, "Samsung S8", "Red", 631190120, "5 MP");
$samsungS8Plus = new Mobile(215185, "Samsung S8 Plus", "Blue", 631190122, "6 MP");

// Tablet Objects
$tablet = new Tablet(215184, "Samsung Tab S6", "Red", "War and Peace");

// Manager objects
$samsungS8Manager = new DeviceManager($samsungS8);

// dumps
echo '<pre>';
var_dump($samsungS8);
echo '</pre>';

echo '<pre>';
var_dump($samsungS8Plus);
echo '</pre>';

echo '<pre>';
var_dump($samsungS8Manager);
echo '</pre>';

echo $samsungS8->callContact("Mathias");
echo '<br>';
echo $samsungS8->getDetail(155);
echo '<br>';
echo $tablet->getDetail(118);
