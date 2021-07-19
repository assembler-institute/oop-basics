<?php

abstract class Device{
    
    function __construct($name,$serialNumber){
        $this->name=$name;
        $this->serialNumber=$serialNumber;
    }

    abstract protected function getDetail();
    function getId(){
        return "That's the device's name: $this->name \n\n";
    }
     function getSerialNo(){
        return "That's the device's serial number: $this->serialNumber\n\n";
    }
}

class television extends Device{
    
    function __construct($name,$serialNumber){
      
         parent::__construct($name,$serialNumber);
    }
    public function getDetail(){
        return $this->name;
    }

}

$tv=new television("sony", 2);

echo ($tv->getDetail());