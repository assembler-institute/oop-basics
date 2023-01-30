<?php

interface marketPlayers{

    $name;

    public function hacerOferta($name){
        echo "Se ha enviado una oferta a " . $this -> $name;
    }

    public function fichar($name){
        echo "Se ha fichado a " . $this -> $name;
    }

}