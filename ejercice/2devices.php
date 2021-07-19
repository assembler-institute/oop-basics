<?php
// 2.a->The Device has to define the common properties for a device
// 2.c->You should also create a class called DeviceManager. This class has to have a method called getDeviceSerialNumber(Device $device) which has to call the getSerialNumber() method of Device objects.


class Device{
 
   function __construct($serialNumber, $marketPrice, $productionCost){
       $this->serialNumber=$serialNumber;
       $this->marketPrice=$marketPrice;
       $this->productionCost=$productionCost;

    }
    public function getDeviceData(){
       return "That the serial number's device:\n$this->serialNumber,\n
       that's the market price's device:$this->marketPrice,\n
       that's the cost price's device:$this->productionCost\n\n\n\n";

    }
}
// 2.b->The Mobile and Tablet classes have to extend the Device class and define some particular properties by their own

class Mobile extends Device{
    // public $mobileCompany;
    // public $screenMobileSize;
    function __construct($serialNumber,$marketPrice, $productionCost,$mobileCompany,$screenMobileSize){
        $this->mobileCompany=$mobileCompany;
        $this->screenMobileSize=$screenMobileSize;
        parent::__construct($serialNumber, $marketPrice, $productionCost);

    }
    public function getMobileCompany(){
        return "That's serial number of mobile:\n$this->serialNumber,\n
        the production mobile's cost $this->productionCost,\n
        and the mobile's market price is $this->marketPrice,\n
        that's the mobile company: $this->mobileCompany,\n
        that's the mobile screen size: $this->screenMobileSize\n\n\n\n
        ";
    }
}
// 2.b->The Mobile and Tablet classes have to extend the Device class and define some particular properties by their own
class Tablet extends Device{
    // public $tabletCompany;
    // public $screenTabletSize;
    function __construct($serialNumber,$marketPrice, $productionCost,$tabletCompany,$screenTabletSize){
        $this->tabletCompany=$tabletCompany;
        $this->screenTabletSize=$screenTabletSize;
        parent::__construct($serialNumber, $marketPrice, $productionCost);

    }
    public function getTabletCompany(){
        return "That's serial number of tablet:\n$this->serialNumber,\n
        the tablet's production cost $this->productionCost,\n
        and the tablet's market price is $this->marketPrice,\n
        that's the tablet company: $this->tabletCompany,\n
        that's the tablet screen size: $this->screenTabletSize\n\n\n\n
        ";
    }
}
// 2.d->The DeviceManager Instance calls the getDeviceSerialNumber method with each one of the devices objects.
class DeviceManager {
   
    function __construct($device){
       $this->deviceNo= $this->getDeviceSerialNumber($device);
    }
    function getDeviceSerialNumber(Device $device){
      return $device->getDeviceData();
    }
}


$tablet=new Tablet(129,900,400,"IphoneTablet",1920);
$mobile=new Mobile(45,1300,700,"Iphone",1080);
$device=new DeviceManager($tablet);

// echo nl2br($tablet->getDeviceData());
// echo nl2br($mobile->getDeviceData());
// echo nl2br($mobile->getMobileCompany());
// echo nl2br($tablet->getTabletCompany());

echo var_dump($device);
