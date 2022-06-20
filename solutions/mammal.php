<?php

include_once './livingBeing.php';

class Mammal extends LivingBeing
{
    private $name;
    private $age;
    private $sound;
    private $numberOfChilds;

    public function __construct($name, $age, $sound, $numberOfChilds, $planet, $enviroment)
    {
        parent::__construct($planet, $enviroment);

        $this->name = $name;
        $this->age = $age;
        $this->sound = $sound;
        $this->numberOfChilds = $numberOfChilds;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSound()
    {
        return $this->sound;
    }

    public function getNumberOfChilds()
    {
        return $this->numberOfChilds;
    }


    public function __destruct()
    {
    }
};
