<?php
class Device3
{
    private $id;
    private $deviceName;
    private $price;


    public function __construct($id, $deviceName, $price)
    {
        $this->id = $id;
        $this->deviceName = $deviceName;
        $this->price = $price;
    }

    public function getDeviceId()
    {
        return $this->id;
    }
}


interface DeviceRepository
{
    public function create(Device3 $device);
    public function findById($id);
}


class MemoryRepository implements DeviceRepository
{
    private $devices = array();
    public function getDevices()
    {
        return $this->devices;
    }

    public function create(Device3 $device)
    {
        array_push($this->devices, $device);
    }

    public function findById($id)
    {
        foreach ($this->devices as $device) {
            $device->getId() == $id ? $device : null;
        }
        return null;
    }
}

class DeviceManager2
{
    public function addDevice(DeviceRepository $repository, Device3 $device)
    {
        $repository->create($device);
    }
}

function display($devices)
{
    echo '<pre>';
    print_r($devices);
    echo '</pre>';
}

$memoryRepo = new MemoryRepository();
$deviceManger = new DeviceManager2();
$deviceManger->addDevice($memoryRepo, new Device3("123", "iPhon8", "300 Euro"));
$deviceManger->addDevice($memoryRepo, new Device3("125", "iPhon11", "750 Euro"));
$deviceManger->addDevice($memoryRepo, new Device3("129", "iPhon12", "900 Euro"));
$deviceManger->addDevice($memoryRepo, new Device3("988", "Galaxy s20", "920 Euro"));

display($memoryRepo);
