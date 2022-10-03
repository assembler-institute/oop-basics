<?php

    class Animal{

        public $strName;
        public $strAnimal;
        public $intAge;
public $color;
        public function __construct(string $name, string $animal, int $age){
            $this -> strName = $name;
            $this -> strAnimal = $animal;
            $this -> intAge = $age;
        }

        // public function __destruct(){
        //     echo "<br>hello";
        // }
        
        public function getDataAnimal(){
            $data = " 
            Name: {$this -> strName}<br> 
            Animal: {$this -> strAnimal}<br>
            Age: {$this -> intAge}<br>
            ";
            return $data;
        } 

        function gender(){
            echo $this -> gender;

        }   

        function Food(){
            echo $this -> food;
        }   

    }

?>