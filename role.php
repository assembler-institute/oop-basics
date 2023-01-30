<?php

    require_once("user.php");

    class role extends user
    {  

        public $country;
        public $gender;
        public $post;

        public function __construct(string $name, string $lastName, int $age, string $country, string $gender, int $post)
        {
            parent::__construct($name, $lastName, $age);
            $this->country = $country;
            $this->gender = $gender;
            $this->postCode = $post;
        }

        public function getInfo()
        {            
            return $this->country."<br>".$this->gender."<br>".$this->post;
        }

        public function getName()
        {
            return $this->name;
        }


        public function getLastName()
        {
            return $this->lastName;
        }

        public function getAge()
        {
            return $this->age;
        }

    }