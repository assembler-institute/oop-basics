<?php

    require_once('classAnimals.php');

    class Data extends Animal{

        static $strStatus = 'Domestic';
        public $strColor;
        public $strAge = '< 5';

        function __construct(string $name, string $animal, string $age, string $color){
            parent::__construct($name, $animal, $age);
            $this -> strColor = $color;
        }

        public function getDataAnimal(){
            $data = " 
            Name: {$this -> strName}<br> 
            Animal: {$this -> strAnimal}<br>
            Age: {$this -> strAge}<br>
            Color: {$this -> strColor}<br>
            ";
            return $data;
        }

    }

?>