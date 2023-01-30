<?php
require_once('Interface.php');

abstract class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(5);
echo "Circle Area: <br>" . $circle->getArea(), '<br>';
echo "Circle Perimeter: <br> " . $circle->getPerimeter(), '<br>';

?>