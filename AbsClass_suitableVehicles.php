<?php

    require_once("ClassVehicle.php");

    // Abstract class 
    abstract class Suitable_circulate_vehicles extends Vehicle {
        // Parameters of the class
        protected $intYear;
        protected $boolElectric;

        // Function contructor
        function __construct(string $maker, string $model, string $color, string $engine, int $year,  bool $electric) {
            parent::__construct($maker, $model, $color, $engine);
            $this->boolElectric = $electric;
            $this->intYear = $year;
        }


        // Method that switch the status of the vehicle to circulate
        abstract public function switchStatusCirculation();

        // Method that returns if the car can enter the city if it is electric and if it is not, check that it is less than 5 years old
        abstract public function checkEnterCity();

        // Method that returns if the car its Electric or no
        abstract public function GetBoolElectric();

    }
?>

