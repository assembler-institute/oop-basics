<?php

    require_once('role.php');

    class Admin extends role
    {
        public $role;
        static public $isEmployee = true;
        public function __construct(string $name, string $lastName, int $age, string $country, string $gender, int $post, string $role)
        {
            parent::__construct($name, $lastName, $age, $country, $gender, $post);
            $this->role = $role;
            $this->country = "Private Country";
        }

        public function getRole()
        {
            return $this->role;
        }

        public function getName()
        {
            return "Name: " . role::getName();
        }
        
        public function getCountry()
        {
            return $this->country;
        }

        public function __destruct()
        {
            echo "<br><br>DESTR: <br>", role::getName();
        }
    }