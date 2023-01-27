<?php

    class Employee{
        public $first_name;
        public $last_name;
        public $age;

        function __construc(string $first_name, string $last_name, int $age){
            $this->first_name =$first_name;
            $this->last_name =$last_name;
            $this->age =$age;
        }

        public function getFirstName(){
            return $this->first_name;
        }
        public function getLastName(){
            return $this->last_name;
        }
        public function getAge(){
            return $this->age;
        }
    }

?>