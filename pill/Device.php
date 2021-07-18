<?php

class Device
{
    protected int $serialNumber;
    public string $color;

    public function __construct($serialNumber, $color)
    {
        $this->serialNumber = $serialNumber;
        $this->color = $color;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }
}
