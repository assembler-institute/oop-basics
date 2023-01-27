<?php

   abstract class Vehicle 
    {
        // Parameters of the class
        protected $strMaker;
        protected $strModel;
        protected $strColor;
        protected $strEngine;

        // Function contructor
        function __construct(string $maker, string $model, string $color, string $engine) 
        {
            $this->strMaker = $maker;
            $this->strModel = $model;
            $this->strColor = $color;
            $this->strEngine = $engine;
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


        
        // Destructor Function
        function __destruct() 
        {
            $this->strMaker.$this->strModel.$this->strColor.$this->strEngine ;
        }
        
        
        
    }   


    


?>
