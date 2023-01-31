<?php

require_once('./Interface.php');

abstract class Spectacles implements Art{
    const SPECTACLE = 'spectacle';
    public $spectacleName;
    protected $spectacleType;

    public function __construct(string $spectacleName, string $spectacleType)
    {
        $this->spectacleName = $spectacleName;
        $this->spectacleType = $spectacleType;
    }
    
    abstract function printCategory():string;
    abstract function printCompany():string;
}

?>