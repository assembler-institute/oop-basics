<?php

namespace Repository;

interface iDeviceRepository
{
    public function create(Device $device);
    public function findById(int $deviceId): Device;
}

/**
 * 
 */
class Device
{
    public string $name;
    public int $serialNumber;
    protected int $id;

    public function __construct($id, $serialNumber, $name)
    {
        $this->id = $id;
        $this->serialNumber = $serialNumber;
        $this->name = $name;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function getId()
    {
        return $this->id;
    }
}

/**
 * 
 */
class MemoryRepository implements iDeviceRepository
{
    protected $devices = array();

    public function __construct()
    {
    }

    public function create(Device $device)
    {
        $this->devices[] = $device;
        return $device;
    }

    public function findById(int $deviceId): Device
    {
        foreach ($this->devices as $device) {
            if ($deviceId == $device->getId()) {
                return $device;
            }
        }
        return new Device(-1, -1, "NULL");
    }
}

/**
 * 
 */
class DeviceManager
{
    public function __construct()
    {
    }

    public static function addDevice(MemoryRepository $repository, Device $device)
    {
        $repository->create($device);
    }
}

// Device Objects
$device1 = new Device(1, 123456789, "Device 1");
$device2 = new Device(2, 987654321, "Device 2");

// MemoryRepository Objects
$repoMemory1 = new MemoryRepository();
$repoMemory2 = new MemoryRepository();

// add objects to repository
DeviceManager::addDevice($repoMemory1, $device1);
DeviceManager::addDevice($repoMemory1, $device2);

echo '<pre>';
var_dump($repoMemory1->findById(2));
echo '</pre>';

echo '<pre>';
var_dump($repoMemory2);
echo '</pre>';
