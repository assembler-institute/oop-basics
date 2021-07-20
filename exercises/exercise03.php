<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
abstract class Device2
{
    private $id;
    private $serialNum;

    public function __construct($id, $serialNum)
    {
        $this->id = $id;
        $this->serialNumber = $serialNum;
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function setSerialNum($serialNum)
    {
        return $this->serialNum = $serialNum;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSerialNum()
    {
        return $this->serialNum;
    }

    abstract function getDetail($deviceId);
}


class Mobile2 extends Device2
{
    private $deviceMemory;

    public function __construct($id, $serialNum, $deviceMemory)
    {
        parent::__construct($id, $serialNum);
        $this->deviceMemory = $deviceMemory;
    }

    public function getMemory()
    {
        return $this->deviceMemory;
    }

    public function getDetail($deviceId)
    {
        return "<h2>Mobile Detail</h2><hr>" . "<h3>Model:" . $this->id = $deviceId . "</h3>" . "<h3>Memory:" . $this->getMemory() . "</h3>";
    }
}

class Mobile3 extends Device2
{
    private $deviceCamera;

    public function __construct($id, $serialNum, $deviceCamera)
    {
        parent::__construct($id, $serialNum);
        $this->deviceCamera = $deviceCamera;
    }

    public function getCamera()
    {
        return $this->deviceCamera;
    }

    public function getDetail($deviceId)
    {
        return "<h2>Mobile Detail</h2><hr>" . "<h3>Model:" . $this->id = $deviceId . "</h3>" . "<h3>Camera:" . $this->getCamera() . "</h3>";
    }
}

echo "<h1>Exercise_3</h1> <br><br>";

$iPhone12 = new Mobile2("iPhone12", "T3F54J6AD00NM", "64GB");
echo $iPhone12->getDetail("iPhone12") . "<br>";

$iPhone11 = new Mobile3("iPhone11", "A4FEAFDAF5dD", "12-megapixel");
echo $iPhone11->getDetail("iPhone11");
