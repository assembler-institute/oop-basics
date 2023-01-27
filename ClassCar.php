<?php

    require_once("AbsClass_suitableVehicles.php");

    // Abstract class
    class Car extends Suitable_circulate_vehicles 

    {   // Parameters of the class
        private $serialNumber;
        static $status = "Active";

        //Function contructor
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

        
        // Method that returns the properties of the car
        public function getChosenCar() 
        {
            $data = "

                Maker:  {$this->strMaker} <br>
                Model:  {$this->strModel} <br>
                Motor:   {$this->strEngine} <br>
                Color:  {$this->strColor} <br>
                Year:  {$this->intYear} <br>
                
            ";

            return $data;
        }

        // Method that switch the status of the vehicle to circulate
        public function switchStatusCirculation() 
        {
            if($this->intYear < date("Y") - 50) {
                echo Car::setStatus("Available to circulate: Inactive");
            }else {
                echo Car::getStatus();
            }
        }


        // Method that returns if the car can enter the city if it is electric and if it is not, check that it is less than 5 years old
        public function checkEnterCity() 
        {
            if($this->boolElectric === true && $this->intYear >= date("Y") - 5  && $this->intYear > date("Y") - 50) {
                echo "Movement restriction: You can enter to the city <br>";
            }elseif ($this->boolElectric === false && $this->intYear >= date("Y") - 5 && $this->intYear > date("Y") - 50) {
                echo "Movement restriction: You can enter to the city <br>";
            }else {
                    echo "Movement restriction: You cant enter to the city <br>";
                }
                
        }

        // Method that return the 4 specifically tires for cars
        public function tires_cars(){
            return "4 tires with 'X' height and 'X' width";
        }

        // Method that returns if the car its Electric or no

        public function GetBoolElectric() 
        {
        
            if($this->boolElectric === true) {
                echo "Electric: Yes<br>";
            }else {
                echo "Electric: No<br>";
            }

        }

        
        

    }


?>