<?php
class Device
{

    public $brand;
    public $model;
    public $serialNumber;

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
    public $serialNumber;

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
    public $capacity;
    public $price;


    public function __construct(string $brand, string $model, string $serialNumber, string $capacity, string $price)
    {
        $this->capacity = $capacity;
        $this->price = $price;
        parent::__construct($brand, $model, $serialNumber);
    }

    public function getMobileData()
    {
        return "<pre> $this->brand <pre> $this->model <pre> $this->serialNumber <pre/> $this->capacity <pre/>";
    }
}

class Tablet extends Device
{

    public function __construct(string $brand, string $model, string $serialNumber, string $capacity, string $price)
    {

        parent::__construct($brand, $model, $serialNumber, $capacity, $price);
    }
}

$mobile = new Mobile('iphone', '14S', '5678HP', '560GB', '1800');
$tablet = new Tablet('IPad', 'ProMax', 'IP45236', '500GB', '2300');
$device = new DeviceManager($mobile);


echo ($device->getDeviceSerialNumber($mobile));
echo "<pre>";
echo ($device->getDeviceSerialNumber($tablet));
echo "</pre>";
echo $mobile->getMobileData();
