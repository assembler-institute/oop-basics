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
//---------------------------------Methods-------------------------------------------
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

function Food(){
    return "food";
}   

//---------------------------------Methods of Abstact-------------------------------------------
public function Sound(string $Sound){
    return $this -> strSound = $Sound;
}
public function Displacement(string $Displacement){
    return  "This animal " . $this -> strDisplacement = $Displacement;
}

//---------------------------------Methods of Interface-------------------------------------------
public function Breath(string $breath){
    $dataBreath = array(
        'Breath with: ' => $this -> breath = $breath,

    );
    return $dataBreath;
}
public function Move(string $move){
    if($move === "terrestrial"){
        $result = "This animal is terrestrial";
    }else if ($move === "aquatic"){ 
        $result = "This animal is aquatic";
    }else if ($move === "aerial"){
        $result = "This animal is aerial";
    }else{
        $result = "I don´t Know";
    }
    return $result;
}

//---------------------------------Methods Destruct-----------------------------------------------
        public function __destruct(){
            echo "<br>hello";
        }
        
    }

?>