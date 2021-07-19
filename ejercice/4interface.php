<?php
interface DeviceRepository{
    public function create(Device $device);
    public function findById($deviceId,$array);
}
class Device{
    
    public function __construct($device,$marketPrice,$costProduction){
        $this->device=$device;
        $this->marketPrice=$marketPrice;
        $this->costProduction=$costProduction;
    }   
}

class MemoryRepository implements DeviceRepository{
    
    public $devices=array();
    function create(Device $device){
        
        $this->devices[]=$device;      
    }
    function findById($deviceId,$array ){
       if(in_array($deviceId,$array )){
            return $deviceId;
        }else {
            return "We don't have this";
        };
    }
}

class DeviceManager {
    
    function addDevice($repository, $device){
        $repository->create($device);       
    }    
}

$device1=new Device("mobil", 1200, 700);
$device2=new Device("tele", 200, 50);
$device3=new Device("laptop", 2400, 1000);
$memory1=new MemoryRepository;
$add=new DeviceManager;

$add->addDevice($memory1,$device3);
$add->addDevice($memory1,$device2);
$add->addDevice($memory1,$device1);

$objects=$memory1->devices;
foreach($objects as $object){
    echo ("
    <div>
    <h3>Item name:</h3>
        $object->device
    </div>
   
    <div>
    <h4>Market price:</h4>
        $object->marketPrice
    </div>
    <div>
    <h4>cost production:</h4>
        $object->costProduction
    </div>
    ") ;
}

 $foundedDevice=$memory1->findById($device4,$objects);

echo("
    <div>
    <h1>Item founded:</h1>
        $foundedDevice->device
    </div>
    ");




