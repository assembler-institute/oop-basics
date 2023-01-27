<?php

require_once("ClassVehicle.php");

class Car extends Vehicle 
    {   
        private $serialNumber;
        static $status = "Active";

        function __construct(string $maker, string $model, string $color, string $engine, int $year,  bool $electric) {
            parent::__construct($maker, $model, $color, $engine, $year, $electric);
            $this->serialNumber = rand();
        }

        // getting private property(getter).
        public function getSerialNumber() {
            return "Serial number: " . $this->serialNumber . "<br>";
        }
        // getting static property(getter).
        public static function getStatus() {
            echo "Available to circulate: " . self::$status;
        }

        // Override property(setter).
        public static function setStatus(string $newStatus) {
            echo self::$status = $newStatus;
        }
        
        //Override method.
        public function checkITV() 
        {   
            if($this->intYear + 4 < date("Y")) {
               echo "You need to pass ITV: " . date("Y") - $this->intYear. " years old vehicle <br>" ;
            }else {
               echo "You dont need to pass ITV: ". date("Y") - $this->intYear. " years old vehicle <br> ";
            }
        }

        

    }


?>