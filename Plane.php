<?php

require_once('./Vehicle.php');

class Plane extends Vehicle {
    static $numOfPropellants;

    function __construct(int $id, string $type, int $price, int $seating, float $security, string $engine, int $numOfPropellants) {
        parent::__construct(
            $id, $type, $price, $seating, $security, $engine
        );
        self::$numOfPropellants = $numOfPropellants;
    }

    // Getters and setters
    public function getId(): int {
        return Tool::getId();
    }

    public function getNumOfPropellants(): int {
        return self::$numOfPropellants;
    }

    public function setNumOfPropellants(int $numOfPropellants) {
        self::$numOfPropellants = $numOfPropellants;
    }

    // numOfPropellantss
    private function securityOverrided() {
        return Vehicle::getSecurity() * 10;
    }

    // Overrided numOfPropellants
    public function getToolInfo(): array {
        return array(
            'id->      Tool' => Tool::getId(),
            'type->    Tool' => Tool::getType(),
            'price->   Tool' => Tool::getPrice() . '€',
            'seating-> Vehicle' => Vehicle::getSeating(),
            'engine->  Vehicle' => Vehicle::getEngine(),
            'security->Vehicle' => $this->securityOverrided() . '/100',
            'numOfPropellants->  Plain' => self::$numOfPropellants
        );
    }

    public function takeOff(): string {
        return 'Fliying';
    }

    // Destruct
    function __destruct() {
        Tool::getId();
        Tool::getType();
        Tool::getType();
        Vehicle::getSeating();
        Vehicle::getEngine();
        Vehicle::getSecurity();
        self::$numOfPropellants;
    }
}