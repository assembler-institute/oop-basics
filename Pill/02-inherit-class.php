<?php

require_once ("01-base-class.php"); 

//1 static property 1 method This class must override: 1 property 1 method


class Kiwi extends Fruit
{
    
    public $origin;

    public function __construct(string $name, string $color, string $taste, string $origin){

        
        parent::__construct($name, $color, $taste);

        $this->origin = $origin;
        
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function getVitamin() {
    
        echo 'I have vitamin C';
}

    public function getFruitDetails() {
        return "<h2>Fruit</h2>
        Name: {$this->name}<br>
        Color: {$this->color}<br>
        Type: {$this->taste}<br>
        Origin: {$this->origin}";
    }
}




?>