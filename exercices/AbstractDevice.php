<?php

abstract class Device
{
    public function __construct(int $id, string $brand, string $model, string $serialNumber)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->serialNumber = $serialNumber;
    }

    public function getId()
    {
        return $this->model;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function getDetail($device)
    {
        return $device->id;
    }
}

class Mobile extends Device
{
    public function __construct(string $id, string $brand, string $model, string $serialNumber, string $capacity, string $price)
    {
        $this->capacity = $capacity;
        $this->price = $price;
        parent::__construct($id, $brand, $model, $serialNumber);
    }

    public function getDetail($device)
    {
        return Device::getDetail($device);
    }
}

$mobile = new Mobile(5, 'Samsung', 'S20', 123456, '120GB', 1200);
var_dump($mobile->getDetail($mobile));
