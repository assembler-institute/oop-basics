<?php

abstract class Feline{
    public $strSound;
    public $strDisplacement;

    function __construct(string $sound, string $displacement){
        $this -> strSound = $sound;
        $this -> strDisplacement = $displacement;
    }

    abstract public function Sound(string $Sound);
    
    abstract public function Displacement(string $Displacement);

}
?>