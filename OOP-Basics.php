<?php

interface VitalFunctions
{
    public function breathe();
    public function eat();
    public function sleep();
}

class Person implements VitalFunctions
{
    private string $name;
    private string $lastName;
    private int $age;

    public function __construct($name, $lastName, $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo "Destructing the object: {$this->name} {$this->lastName}.";
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function talk()
    {
        return "I`m talking.";
    }

    public function walk()
    {
        return "I`m walking.";
    }
    public function breathe()
    {
    }
    public function eat()
    {
    }
    public function sleep()
    {
    }
}


class HPDeveloper extends Person
{
    public static string $company = "HP";
    private $languajes;
    private $experiencePrograming;

    public function __construct($name, $lastName, $age, $languajes, $experiencePrograming)
    {
        parent::__construct($name, $lastName, $age);
        $this->languajes = $languajes;
        $this->experiencePrograming = $experiencePrograming;
    }

    public function setLanguajes(array $languajes)
    {
        $this->languajes = $languajes;
    }

    public function getLanguajes()
    {
        return $this->languajes;
    }

    public function setExperiencePrograming(int $experiencePrograming)
    {
        $this->experiencePrograming = $experiencePrograming;
    }

    public function getExperiencePrograming()
    {
        return $this->experiencePrograming;
    }

    public function develop()
    {
        return "I`m developer";
    }

    public function talk()
    {
        return "I`m developer.";
    }
}

abstract class Informatic
{
    public array $titles;
    public int $experiencie;


    public function repairComputers()
    {
    }

    public function officeAutomation()
    {
    }
}
