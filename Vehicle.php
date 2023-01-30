<?php

require_once('./Tool.php');

class Vehicle extends Tool {
    private $seating;
    private $security;
    private $engine;

    function __construct(int $id, string $type, int $price, int $seating, float $security, string $engine) {
        parent::__construct($id, $type, $price);
        $this->seating = $seating;
        $this->security = $security;
        $this->engine = $engine;
    }

    // Getters and setters
    public function getSeating(): int {
        return $this->seating;
    }

    public function getEngine(): string {
        return $this->engine;
    }

    public function getSecurity(): float {
        return $this->security;
    }

    // Methods
    public function getToolInfo(): array {
        return array(
            'id->      Tool' => Tool::getId(),
            'type->    Tool' => Tool::getType(),
            'price->   Tool' => Tool::getPrice() . '€',
            'seating-> Vehicle' => $this->seating,
            'engine->  Vehicle' => $this->engine,
            'security->Vehicle' => $this->security . '/10',
        );
    }

    public function doSomething(string $init) {
        return $init;
    }

    public function motion1(): string {
        return 'Doing motion1';
    }

    public function motion2(): string {
        return 'Doing motion2';
    }
}