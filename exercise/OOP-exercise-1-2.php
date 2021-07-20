<?php

// 1. Creating a "Device" class
class Device
{
    public $serNum  = "123456789";

    // 2a. Declaring methods
    public function getSerialNumber()
    {
        return $this->serNum;
    }
}

// 2. Creating "Mobile" &"Tablet" classes
class Mobile extends Device
{
    public $isFoldable = true;
    public $cameraResolution = "5MPx";
}

class Tablet extends Device
{
    public $hasInternet = true;
    public $hasFrontCamera = true;
}

// 2c. DeviceManager class
class DeviceManager
{
    // Methods
    public function getDeviceSerialNumber(Device $device)
    {
        $deviceSerialNumber = $device->getSerialNumber();
        return $deviceSerialNumber;
    }
}

//2d. Calling classes
$deviceManager = new DeviceManager();

$mobile = new Mobile();
$deviceManager->getDeviceSerialNumber($mobile);

$tablet = new Tablet();
$deviceManager->getDeviceSerialNumber($tablet);

echo "<pre> This is a mobile instance: " . print_r($mobile, true) . "</pre>";
echo "<pre> This is a tablet instance: " . print_r($tablet, true) . "</pre>";
