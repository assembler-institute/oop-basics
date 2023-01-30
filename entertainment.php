<?php

abstract class entertainment{
    public $typeOfEntertainment;
    public $typeOfEffort;
    public $info;

    public function __construct($typeOfEntertainment, $typeOfEffort){
        $this->typeOfEntertainment = $typeOfEntertainment;
        $this->typeOfEffort = $typeOfEffort;
    }
    abstract public function setInfo(string $info);
    abstract public function getInfo():string;
}

    

?>