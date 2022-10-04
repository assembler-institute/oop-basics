<?php

require_once('./10-a-Test-Abstract.php');

class Marino extends SerVivo {
    public string $liveIn = 'Forest';
    public bool $vertebrate = false;
    static $alive = "Alive";

    function __construct($type, $vertebrate, $timeLife){
        parent::__construct($type, $vertebrate, $timeLife);
    }

    public function setLive(string $live) {
        $this->liveIn = $live;
    }

    public function getLive():string {
        return $this->liveIn;
    }

    public function greetings() {
        $greet = parent::greetings();
        return $greet . ' changed with Abstract method';
    }

    public function getType() {
        return $this->type;
    }

    public function getTimeLife() {
        return $this->timeLife;
    }

    public function getVertebrate() {
        return $this->vertebrate;
    }
}

?>