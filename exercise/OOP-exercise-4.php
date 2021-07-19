<?php

// General class
class Device
{
    public $size;
    public $serialNo;
    public $brand;
    public $color;

    public function setID($randomId)
    {
        $this->Id = $randomId;
    }

    public function getID()
    {
        return $this->Id;
    }
}

// Interface
interface DeviceRepository
{
    // Injecting the instanced Devide
    public function create(Device $device): Device;
    // Finding devide by Id
    public function findById($deviceId);
}

class MemoryRepository implements DeviceRepository
{
    // Array of devices
    public static $devices = [];

    // Creating device
    public function create(Device $device): Device
    {
        $device->setId(uniqid());
        $this->devices[$device->getId()] = $device;
        return $device;
    }

    // Find device by ID
    public function findById($id)
    {
        if (!isset($this->devices[$id])) {
            echo "Device not found";
        }
        echo "This is the found id: " . $this->storage[$id];
    }
}


class DeviceManager
{
    public function addDevice(DeviceRepository $repository, Device $device)
    {
        $repository->create($device);
    }
}

// Testing
echo "This is MemoryRepository: " . print_r(MemoryRepository::$devices, true);

// Device instance
$newDevice = new Device();
$newDevice->size = "500mm*80mm";
$newDevice->serialNo = "13faddij93n990";
$newDevice->brand = "Apple";
$newDevice->color = "Color";

// $newDeviceManager = new DeviceManager();
// $newDeviceManager->addDevice(new DeviceRepository(), $newDevice);
// echo print_r($newDeviceManager, true);
