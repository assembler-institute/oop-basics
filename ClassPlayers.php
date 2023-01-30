<?php

class Player{

    public $strNombre;
    public $strPosicion;
    public $intNumero;

    public function __construct($nombre, $posicion, $numero){
        $this -> strNombre = $nombre;
        $this -> strPosicion = $posicion;
        $this -> intNumero = $numero;
    }

    public function pase(){
        echo $this -> strNombre . " pasa la pelota <br>";
    }

    public function chute(){
        echo $this -> strNombre . " chuta la pelota <br>";
    }

    public function perdida(){
        echo $this -> strNombre . " pierde la pelota <br>";
    }

    public function __destruct(){
        echo "<br> The player is " . $this->strNombre;
    }
}

$player = new Player("Neymar", "Delantero", 10);

$player -> perdida();