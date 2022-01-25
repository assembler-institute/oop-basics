<?php
//base class
class Vehicle
{
    public $wheels = "michelin";
    public $body;
    protected $brakes;
    public $vehicleBrand;

    public function __construct($body, $vehicleBrand)
    {
        $this->body = $body;
        $this->vehicleBrand = $vehicleBrand;
    }
    public function setBrakes($brakes)
    {
        $this->brakes = $brakes;
    }
    public function getBrakes()
    {
        return $this->brakes;
    }
    public function getAlldataVehicle()
    {

        return "
        $this->wheels,
        $this->body,
        $this->vehicleBrand
        ";
    }
    public function __destruct()
    {
        echo "deleting vehicles";
    }
}
$myVehicle = new Vehicle("4x4", "alluminium", "bmw");
echo $myVehicle->getAlldataVehicle();
//inherit class
class Car extends Vehicle
{
    public $wheels = "pirelli";
    public $engine;
    public $horsePower;
    public function __construct($vehicleBrand, $body, $engine)
    {
        parent::__construct($vehicleBrand, $body);
        $this->engine = $engine;
    }
    public function startEngine()
    {
    }
    public function getAlldataVehicle()
    {
        return "$this->wheels,
        $this->body,
        $this->vehicleBrand,
        $this->engine";
    }
}

//abstract class
abstract class DNI
{
    public $numbers;
    protected $letter;

    public function removeDNI()
    {
        echo "your dni has removed";
    }
    public function setLetter($letter)
    {
        $this->letter = $letter;
    }
    public function getLetter()
    {
        return "This user has the letter " . $this->letter;
    }
}
//inherit of abstracted class
class Identity extends DNI
{
    public $address;
    public $job;
    public $birthday;
    public $married;
    //etc..
}
$user = new Identity();
$user->setLetter("X");
echo "<br>" . $user->getLetter() . "<br>";

interface manageEmployees
{
    public function editEmployee();
    public function deleteEmployee();
    public function createEmployee();
}
class employees implements manageEmployees
{
    public $name;
    public $last_name;
    public $address;
    private $salary;
    public function editEmployee()
    {
        echo "this is a test";
    }
    public function deleteEmployee()
    {
        echo "this is a test";
    }
    public function createEmployee()
    {
        echo "this is a test";
    }
}
