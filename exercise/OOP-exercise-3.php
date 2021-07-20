<?php

abstract class Device
{
    abstract public function getDetail();

    public function getId()
    {
        return $this->name;
    }

    public function getSerialNum()
    {
        return $this->serialNo;
    }
}

class Mobile extends Device
{
    public $name;
    public $serialNo;

    public function getDetail()
    {
        return $this->name;
    }
}

// Creating an instance
$mobile = new Mobile();
$mobile->name = "New phone";
$mobile->serialNo = "2940135";

echo "<pre> This instance comes from an abstract class: " . print_r($mobile, true) . "</pre>";
