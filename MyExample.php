<?php

//Base class
class Vehicle {
    public $typeVehicle = "";

//3 properties
    public $wheels;
    public $motor;
    public $maxSpeed;

//3 methods
    public function speedUp(){
        return "this $this->typeVehicle is accelerating <br>";
    }
    public function slowingDown(){
        return "this $this->typeVehicle is decelerating<br>";
    }
    public function maxSpeed(){
        return "this $this->typeVehicle is on his maximum speed<br>";
    }

//1 constructor
    public function __construct(int $wheels, bool $motor,string $maxSpeed){
        $this->wheels = $wheels;
        $this->motor = $motor;
        $this->maxSpeed = $maxSpeed;
    }

//1 destructor
    public function __destruct(){
        return "<br> this vehicle is stopped<br>";
    }
}


//inherits the base class
class Car extends Vehicle{

//1 static property
    public static $gearShift;

//1 method
    public function heating(){
        return "this car has the heating ON<br>";
    }

//1 method override
    public function speedUp() {
        return "This car is accelerating so fast! It's crazy<br>";
    }

//1 property override
    public function overrideProperty(){
        return "$maxSpeed + km/h<br>";
    }

    public function __construct(int $wheels, bool $motor,string $maxSpeed,string $gearShift) {
        parent::__construct($wheels, $motor, $maxSpeed);
        $this->gearShift = $gearShift;
    }
}

//One abstract class
abstract class Motorcycle{

//2 properties
    public $cylinders;
    public $drivingPosition; //Sports driving, Standard position, Cruise stance

//2 methods
    public function speedReason(){
        return "this motorcycle has this speed cause it has $cylinders cylinders<br>";
    }
    public function confrortReason(){
        return "this motorcycle is so confort cause the position is $drivingPosition<br>";
    }
}

//One interface
interface Security {

//at least 2 methods
    public function airbag();
    public function autoBrake();
}

//implement the interface by one class
class Mercedes extends Car implements Security{
    public function airbag(){
        return "this vehicle has the airbag ON<br>";
    }
    public function autoBrake(){
        return "this vehicle has the automatically brake ON<br>";
    }
}

//Showing an example
$BMW = new Car(4, true, "300km/h", "automatic");
$BMW->typeVehicle = "Car";
echo $BMW->speedUp();
echo $BMW->slowingDown();
echo $BMW->maxSpeed();
var_dump($BMW);