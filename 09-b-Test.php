<?php

    require_once('./09-a-Test.php');

    class Marsupial extends Animal {
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
            return $greet . ' changed';
        }



    }

?>