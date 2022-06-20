<?php

interface AliveAnimal
{
    public function breath();
    public function move();
}

class Animal implements AliveAnimal
{
    protected  $age;
    protected $fur;
    protected  $vertebrates;
    protected  $type;

    public function __construct(int $age, bool $fur, bool $vertebrates, string $type)
    {
        $this->age = $age;
        $this->fur = $fur;
        $this->vertebrates = $vertebrates;
        $this->type = $type;
    }

    public function breath()
    {
        echo 'i can breath';
    }

    public function move()
    {
        echo 'i can move';
    }

    public function sound()
    {
        echo 'i can make a sound';
    }

    public function getAge()
    {
        return $this->age;
    }



    public function __destruct()
    {
    }
}
