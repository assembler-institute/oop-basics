<?php

    class Vehicle 
    {
        // Parameter of the class
        private $strMaker;
        private $strModel;
        private $strColor;
        private $strEngine;
        protected $intYear;
        private $boolElectric;

        // Function contructor
        function __construct(string $maker, string $model, string $color, string $engine, int $year, bool $electric) 
        {
            $this->strMaker = $maker;
            $this->strModel = $model;
            $this->strColor = $color;
            $this->strEngine = $engine;
            $this->intYear = $year;
            $this->boolElectric = $electric;
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


        // Method that returns if the car has to pass ITV if it is more than 4 years old
        public function checkITV() 
        {
            if($this->intYear + 4 < date("Y")) {
               echo "You need to pass ITV: " . date("Y") - $this->intYear. " years old car <br>" ;
            }else {
               echo "You dont need to pass ITV <br>";
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



        // Method that returns if the car its Electric or no


        public function GetBoolElectric() 
        {
        
            if($this->boolElectric === true) {
                echo "Electric: Yes<br>";
            }else {
                echo "Electric: No<br>";
            }

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
        
        // Destruc Function
        function __destruct() 
        {
            $this->strMaker.$this->strModel.$this->strColor.$this->strEngine ;
        }
        
        
        
    }   


    


?>
