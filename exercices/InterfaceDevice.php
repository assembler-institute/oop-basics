<?php

interface DeviceRepository
{
    public function createDevice(Device $device);
    public function findId($deviceId, $array);
}

class Device
{
    public function __construct(string $id, string $brand, string $model, string $serialNumber)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->serialNumber = $serialNumber;
    }
}

class MemoryRepository implements DeviceRepository
{
    public $devices = array();

    public function createDevice(Device $device)
    {
        $this->devices[] = $device;
    }
    public function findId($deviceId, $array)
    {
        if (in_array($deviceId, $array)) {
            return $deviceId;
        }
    }
}


class DeviceManager extends MemoryRepository
{
    function __construct(MemoryRepository $repository, Device $device)
    {
        $this->repository = $repository;
        $this->device = $device;
    }

    function addDevice($repository, $device)
    {
        $repository->createDevice($device);
        return $repository;
    }
}

$device1 = new Device(1, 'Samsung', 'S20', 'SG3454');
$device2 = new Device(2, 'iPhone', 'X', 'IP7849');
$device3 = new Device(3, 'Xiamoi', 'MI30', 'XM0948');

$memory = new MemoryRepository();
$addDevice = new DeviceManager($memory, $device2);
$addDevice->addDevice($memory, $device1);
$addDevice->addDevice($memory, $device2);

var_dump($memory);
