<?php

// Now let’s create an interface for a Device repository.
// First create a Device class with some properties, as you like.

class Device
{
    function __construct(string $brand, int $serial, string $system)
    {
        $this->brand = $brand;
        $this->serial = $serial;
        $this->system = $system;
    }
}

// Then create an interface called DeviceRepository, which defines two methods:
// - create(Device $device) which has an injection of the Device class you have created
// - findById($deviceId) which with the $deviceId returns the Device object but remember this is an interface do not implement methods,
// it just defines them.

interface DeviceRepository
{
    public function create(Device $device);
    public function findById($deviceId);
}

// Now we need an implementation of the interface DeviceRepository so we are going to create a class called MemoryRepository
// which implements the DeviceRepository. Here you can define the methods as you like.

class MemoryRepository implements DeviceRepository
{
    function __construct()
    {
        $this->deviceArr = [];
    }

    public function create(Device $device)
    {
        array_push($this->deviceArr, $device);
        return $this->deviceArr;
    }

    public function findById($deviceId)
    {
        foreach ($this->deviceArr as $dev) {
            if ($dev->serial == $deviceId) {
                return $dev;
            }
        }
    }
}

$motorola = new Device("Motorola", 134257, "android");
$x6 = new Device("iPhone", 981321, "ios");
$nokia = new Device("Nokia", 7461, "windows");

$test = new MemoryRepository();
$test->create($motorola);
$test->create($x6);
print_r($test->create($nokia));
echo "</br>";
print_r($test->findById(7461));

// Finally we need to create a class called DeviceManager, which defines a method addDevice(DeviceRepository $repository, Device $device).
// Create an instance of it and inject to this method the implementation you have done.
// Remember this is to check your understanding about OOP.

class DeviceManager
{
    function addDevice(DeviceRepository $repository, Device $device)
    {
    }
}
