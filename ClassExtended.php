<?php

require_once("ClassPlayers.php");

class Defender extends Player {

    public $strPosicion;
    public static $strGeneralPosicion = "Defensa";

    public function __construct($nombre, $posicion, $numero){
        $this -> strPosicion = $posicion;
        parent::__construct($nombre, $numero, $posicion);
    }

    public function perdidaAcabadaenGol(){
        echo $this -> strNombre . "pierde el balón y termina en gol <br>";
    }

    public function pase(){
        echo $this -> strNombre . "hace un buen pase <br>";
    }

}


$newDefender = new Defender("Albert", "Defensa Central", 14);

$player -> perdida();