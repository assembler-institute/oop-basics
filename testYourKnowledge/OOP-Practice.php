<?php 

    // Class definition example
    class Device{
        private string $serialNumber;
        private int $deviceId;

        public function __construct(string $serialNumber, int $deviceId){
            $this->serialNumber = $serialNumber;
            $this->deviceId = $deviceId;
        }

        public function getSerialNumber():string{
            return $this->serialNumber;
        }

        public function getDeviceID():int{
            return $this->deviceId;
        }
    }

    // Inheritance examples
    class Mobile extends Device{

        private $sizes = array();

        public function __construct(string $serialNumber,int $deviceId, array $sizes){
            parent::__construct($serialNumber,$deviceId);
            $this->sizes = $sizes;
        }
    }

    class Tablet extends Device{
        
        private string $screenType;

        public function __construct(string $serialNumber,int $deviceId, string $screenType){
            parent::__construct($serialNumber, $deviceId);
            $this->screenType = $screenType;
        }
    }

    class DeviceManager{

        private string $serialNumber;

        public function __construct(Device $device){
            $this->serialNumber = $this->getDeviceSerialNumber($device);
        }

        public function getDeviceSerialNumber(Device $device):string{
            return $device->getSerialNumber();
        }
    }

    // Abstract class example 
    abstract class Device2{

        private int $deviceId;
        private string $serialNumber;

        public function __construct(int $deviceId, string $serialNumber){
            $this->deviceId = $deviceId;
            $this->serialNumber = $serialNumber;
        }

        abstract function getDetail();

        public function getId(){
            return $this->deviceId;
        }

        public function getSerialNo(){
            return $this->serialNumber;
        }

    }

    class Computer extends Device2{

        private $details;
        public function __construct(int $deviceId, string $serialNumber){
            parent::__construct($deviceId, $serialNumber);
            $this->details = array();

        }

        public function getDetail(){
            $this->details = ['id' => parent::getId(), 'serialnumber' => parent::getSerialNo()];
            return $this->details;
        }
    }

    // Interface example
    interface DeviceRepository{

        public function create(Device $device);
        public function findById(int $deviceId);
        
    }

    class MemoryRepository implements DeviceRepository{
        
        private $repo;

        public function __construct(){
            $this->repo = array();
        }

        public function create(Device $device):void{
            array_push($this->repo, $device);
        }

        public function findById(int $Id){
            foreach ($this->repo as $device){
                if($device->getDeviceID()=== $Id){
                    return $device;
                }
            }
        }

        
    }

    class DeviceManager2{

        public function addDevice(MemoryRepository $repository, Device $device){
            if(!$repository->findById($device->getDeviceID())){
                $repository->create($device);
            }
        }
    }

    // Example prints
    $device = new Device("1234gh", 1);
    $device2 = new Device("1902jk", 6);
    $mobile = new Mobile("123456gh", 2, array("15.5 cm", "5.5 cm", "1.0 cm"));
    $tablet = new Tablet("126gh", 3, "Gorilla glass");
    $deviceManager = new DeviceManager($device);
    $computer = new Computer(12, "4321PC");
    
    $memoRepo = new MemoryRepository();
    $deviceManager2 = new DeviceManager2();
    
    echo "Examples part 1 and 2";
    echo "<pre>";
    echo var_dump($device);
    echo "</pre>";
    
    echo "<pre>";
    echo var_dump($mobile);
    echo "</pre>";
    
    echo "<pre>";
    echo var_dump($tablet);
    echo "</pre>";

    echo "<pre>";
    echo  var_dump($deviceManager);
    echo "</pre>";

    echo "Abstract example <br>";
    echo "<pre>";
    $computer->getDetail();
    echo var_dump($computer);
    echo "</pre>";

    echo "Interface example <br>";
    $deviceManager2->addDevice($memoRepo, $device);
    $deviceManager2->addDevice($memoRepo, $device2);
    $deviceManager2->addDevice($memoRepo, $mobile);
    $deviceManager2->addDevice($memoRepo, $tablet);
    echo "<pre>";
    echo  var_dump($memoRepo);
    echo "</pre>";
?>