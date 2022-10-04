<?php

    require_once("Interface.php");
    require_once("classAbstract.php");
    class Animal extends Feline implements Properties {

        public $strName;
        public $strAnimal;
        public $strAge = '> 5';

        public function __construct(string $name, string $animal, string $age){
            $this -> strName = $name;
            $this -> strAnimal = $animal;
            $this -> strAge = $age;
        }

        public function getDataAnimal(){
            $data = " 
            Name: {$this -> strName}<br> 
            Animal: {$this -> strAnimal}<br>
            Age: {$this -> strAge}<br>
            ";
            return $data;
        }
        
        function gender(string $gender){
            if($gender === "female"){
                $result = "female";
            }else if($gender === "male"){
                $result = "male";
            }else{
                $result = "I don´t Know";
            }
            return $result;
        }   

        public function Sound(string $Sound){
            $this -> strSound = $Sound;
        }
        public function Displacement(string $Displacement){
            $this -> $strDisplacement = $Displacement;
        }

        public function Breath(string $breath):string{
            $dataB = array(
                    'Name: ' => $this -> strName,
                    'Animal: ' => $this -> strAnimal,
                    'Age:' => $this -> strAge
                    );
                    return $dataB;
        }
        public function Move(string $move):string{
            
        }
        
       // public function Breath(string $breath):string;
       // public function Move(string $move):string;
        // public function __destruct(){
        //     echo "<br>hello";
        // }
        
        // public function getDataAnimal(){
        //     $data = array(
        //     'Name: ' => $this -> strName,
        //     'Animal: ' => $this -> strAnimal,
        //     'Age:' => $this -> strAge
        //     );
        //     return $data;
        // }

        // function __construct(string $sound, string $displacement){
        //     parent::__construct($sound, $displacement);
        // }


        function Food(){
            echo $this -> food;
        }   

    }

?>