<?php

echo "josee";

class Employee
{
    private $company = "Assembler S.A.";
    public $name = "Juan";
    public $gender = "Macho";
    public $age = "25";
    protected $job = "jardinero";

    public function __construct($salary, $department)
    {
        $this->salary = $salary;
        $this->department = $department;
    }

    public function __destruct()
    {
        echo "<br>borrado";
    }
    function callObject(){
        echo "<br>";
        print_r($this);
    }
    function callSalary(){
        echo "<br>".$this->salary;
    }
    function callCompany(){
        echo "<br>".$this->company;
    }
}

$employee1 = new Employee(500, "Limpieza");

$employee1->callObject();
$employee1->callSalary();
$employee1->callCompany();


class Limpiadores extends Employee{

    public $name = "Pepe";

    static function clean(){
        echo "<br>clean it!";
    }
    function callSalary(){
        echo "<br>The salary of ".$this->name." is ".$this->salary;
    }
    function callJob(){
        echo "<br>".$this->job;
    }
}

$pepe = new Limpiadores(2000, "Limpiadores Pro");

Limpiadores::clean();

$pepe->callSalary();
$pepe->callJob();
$pepe->callObject();

echo "<br>---------------------- Abstract Class ----------------------<br>";

abstract class Employe{
    public $name;
    public $job;

    function __construct($name, $job){
        $this->name = $name;
        $this->job = $job;
    }

    abstract public function callName();
    abstract public function callJob();
}

class Persona extends Employe{
    public $age;

    public function __construct($name, $job, $age){
        parent::__construct($name, $job);
        $this->age = $age;
    }
    public function callName(){
        echo $this->name;
    }

    public function callJob(){
        echo "<br>".$this->job;
    }
}

$employee2 = new Persona("Gonzalo", "maquina", 25);

$employee2->callName();
$employee2->callJob();

echo "<br>---------------------- Interface ----------------------";

interface ShowEmployee{
    public function showName();
    public static function showAge();
}

class Employee2 implements ShowEmployee{
    public $name = "Juan";
    public static $age = 24;

    public function showName(){
        echo "<br>el nombre es: ".$this->name;
    }
    public static function showAge()
    {
        echo "<br>".self::$age;
    }
}

$juan = new Employee2();
$juan->name = "pepe";
$juan::$age = 25;
$juan->showName();
$juan::showAge();