<?php

    require_once('classAnimals.php');
    class Data extends Animal{

        static $strStatus = 'Domestic';

        function __construct(string $name, string $animal, int $age){
            parent::__construct($name, $animal, $age);
        }

        public function setStatus(string $status){
            $this -> strStatus = $status;
        }

    }

?>