<?php
include_once './animal.php';

class Cat extends Animal
{
    private $breed;

    public function __construct(int $age, bool $fur, bool $vertebrates, string $type, string $breed)
    {
        parent::__construct($age, $fur, $vertebrates, $type);
        $this->breed = $breed;
        $this->age = $age * 7;
    }

    public function purr()
    {
        echo 'i can purr';
    }

    public function sound()
    {
        echo ' i can meow';
    }
}

abstract class Feline
{
    private $whiskerType;

    public function throwObjectInstance()
    {
        return get_object_vars($this);
    }
}
