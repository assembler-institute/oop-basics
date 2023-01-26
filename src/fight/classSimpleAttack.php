<?php

final class SimpleAttack {
    private String $name;
    private int $damage;

    function __construct(String $name, int $damage) {
        $this->name = $name;
        $this->damage = $damage;
    }

    public function getName():String {
        return $this->name;
    }

    public function setName(String $name):void {
        $this->name = $name;
    }

    public function getDamage():int {
        return $this->damage;
    }

    public function setDamage(int $damage):void {
        $this->damage = $damage;
    }
}