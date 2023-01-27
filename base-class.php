<?php
    require './abstract-class.php';

    class Vehicle extends Dealership{
        const VEHICLE_DEALER = 'Name of Dealership';
        
        protected String $strType;
        protected String $strStyle;
        protected String $strEnergy;

        public function __construct(String $dealershipName, Bool $open, String $type, String $style, String $energy){
            parent::__construct($dealershipName, $open);
            $this->strType = $type;
            $this->strStyle = $style;
            $this->strEnergy = $energy;
        }

        public function getType(){
            return $this->strType;
        }

        public function getStyle(){
            return $this->strStyle;
        }

        public function getEnergy(){
            return $this->strEnergy;
        }

        public function getVehicle(): String{
            $vehicle = "<h1>Vehicles</h1>
            <p>Type: $this->strType</p>
            <p>Energy: $this->strEnergy</p>
            <p>Style: $this->strStyle</p>";

            return $vehicle;
        }

        public function __destruct(){
            $msgDestruct = "This $this->strType was destructed";
            echo $msgDestruct;
        }

    }
?>