<?php
include_once "./mammal.php";

class Human extends Mammal
{
    private static $carrer;
    private $salary;


    public function __construct($name, $age, $sound, $numberOfChilds, $salary, $planet, $enviroment)
    {
        parent::__construct($name, $age, $sound, $numberOfChilds, $planet, $enviroment);
        $this->salary = $salary;
    }

    public function getCarrer()
    {
        return $this->carrer;
    }

    public function getNumberOfChilds()
    {
        $childs = parent::getNumberOfChilds();
        return 'number of childs ' . $childs;
    }
}
