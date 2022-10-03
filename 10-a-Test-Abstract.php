<?php

abstract class SerVivo {
    public bool $vertebrate = true;
    public string $type;
    public string $timeLife;

    function __construct($type, $vertebrate, $timeLife){
        $this->type = $type;
        $this->vertebrate = $vertebrate;
        $this->timeLife = $timeLife;
    }

    
    abstract public function greetings();

    public function __destruct() {
        print 'Destroying the class ' . __CLASS__ . '<br>';
    }

    abstract public function getType();

    abstract public function getTimeLife();

    abstract public function getVertebrate();

}
?>