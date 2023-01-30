<?php
class Vehicle {
    protected $make;
    protected $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function __destruct() {
        echo "The vehicle has been destroyed.<br>";
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function startEngine() {
        return "The engine is running.<br>";
    }

    public function stopEngine() {
        return "The engine is off.<br>";
    }

}

class Car extends Vehicle {
    private $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }

    public function getDoors() {
        return $this->doors;
    }
}

$car = new Car('Pagani', 'Zonda R', 1999, 2);
echo $car->getMake(), '<br>';
echo $car->getModel(), '<br>';
echo $car->getYear(), '<br>';
echo $car->getDoors(), '<br><br>';

?>