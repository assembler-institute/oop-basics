<?php
class Device
{
    public function __construct(string $brand, string $model, string $serialNumber)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->serialNumber = $serialNumber;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }
}

class DeviceManager
{
    public function __construct(Device $device)
    {
        $this->serialNumber = $this->getDeviceSerialNumber($device);
    }

    public function getDeviceSerialNumber(Device $device)
    {
        return $device->getSerialNumber();
    }
}

class Mobile extends Device
{
    public function __construct(string $brand, string $model, string $serialNumber, string $capacity, string $price)
    {
        $this->capacity = $capacity;
        $this->price = $price;
        parent::__construct($brand, $model, $serialNumber);
    }

    public function getMobileData()
    {
        return "<br/> $this->brand <br/> $this->model <br/> $this->serialNumber <br/> $this->capacity <br/>";
    }
}

class Tablet extends Device
{
    public function __construct(string $brand, string $model, string $serialNumber, string $capacity, string $price)
    {
        $this->capacity = $capacity;
        $this->price = $price;
        parent::__construct($brand, $model, $serialNumber);
    }
}

$mobile = new Mobile('Samsung', 'S20', '44352FH', '120GB', '1200');
$tablet = new Tablet('IPad', 'Pro', 'IP45236', '256GB', '1800');
$device = new DeviceManager($mobile);


echo ($device->getDeviceSerialNumber($mobile));
echo "<br/>";
echo ($device->getDeviceSerialNumber($tablet));
echo "<br/>";
echo $mobile->getMobileData();
