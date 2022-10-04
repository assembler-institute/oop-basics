<?php

    require_once('./Interface.php');

    class Animal implements Operation {
        public bool $vertebrate = true;
        public string $type;
        public string $timeLife;

        function __construct($type, $vertebrate, $timeLife){
            $this->type = $type;
            $this->vertebrate = $vertebrate;
            $this->timeLife = $timeLife;
        }

        
        public function greetings() {
            return 'Hello';
        }

        public function __destruct() {
            print 'Destroying the class ' . __CLASS__ . '<br>';
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