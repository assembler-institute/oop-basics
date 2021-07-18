<?php

abstract class Device
{
    protected string $name;
    protected int $serialNumber;
    public string $color;

    public function __construct($serialNumber, $name, $color)
    {
        $this->serialNumber = $serialNumber;
        $this->color = $color;
        $this->name = $name;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function getId()
    {
        return $this->name;
    }

    public abstract function getDetail(int $deviceId): string;
}
