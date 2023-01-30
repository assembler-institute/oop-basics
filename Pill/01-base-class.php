<?php


//Create a base class with 3 properties, 3 methods, 1 constructor and 1 destructor

//create a class
class Fruit {

//properties
    public $name;
    public $color;
    public $taste;
    public $peel;

//contruct

public function __construct(string $name, string $color, string $taste){
    $this->name = $name;
    $this->color = $color;
    $this->taste = $taste;
}
//destruct

public function __destruct()
{
    $this->peel;
}

public function getFruitDetails() {
    return "<h2>Fruit</h2>
    Name: {$this->name}<br>
    Color: {$this->color}<br>
    Type: {$this->taste}<br>";
}

//methods

    public function Feed() {
    
        echo 'I am feeding';
}
    
    public function Hydrate() {
        
        echo 'I am hydrating';
    }

    public function Regular() {
        
        echo 'I regulate intestinal transit';
    }


}





?>