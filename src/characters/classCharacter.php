<?php
class Character {

    private $nombre;

    function __construct(string $nombre){
        $this->nombre = $nombre;
    }

    public function getNombre():string {
        return $this->nombre;
    }

    public function setNombre (string $nombre):void{
        $this->nombre = $nombre;
    }
}