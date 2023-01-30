<?php

require_once('./UseTool.php');

abstract class Tool implements UseTool {
    private $id;
    private $type;
    protected $price;

    function __construct(int $id, string $type, int $price) {
        $this->id = $id;
        $this->type = $type;
        $this->price = $price;
    }

    // Getters and setters
    public function setId(int $id) {
        $this->id = $id;
    }

    public function setType(string $type) {
        $this->type = $type;
    }

    public function setPrice(int $price) {
        $this->price = $price;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getType(): string {
        return $this->type;
    }

    public function getPrice(): int {
        return $this->price;
    }

    // Methods
    abstract public function getToolInfo(): array;

    abstract public function doSomething(string $init);

    abstract public function motion1(): string;

    abstract public function motion2(): string;
}