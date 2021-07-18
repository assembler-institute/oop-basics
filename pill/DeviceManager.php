<?php

require_once "Device.php";
require_once "Mobile.php";

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
$samsungS8 = new Mobile(215184, "Red", 631190120, "5 MP");
$samsungS8Plus = new Mobile(215185, "Blue", 631190122, "6 MP");

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
