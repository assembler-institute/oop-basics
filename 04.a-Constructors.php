<?php

    class User {
        const ONLINE = 'Active';
        private string $name = 'Juan';
        private string $lastName = 'Solano';
        private int $age = 36;

        // CONSTRUCTOR   ->     @param string $name
        //                      $this->name = $name;

        public function __construct(string $name, string $lastName, int $age) {
            $this->name = $name;
            $this->lastName = $lastName;
            $this->age = $age;
        }
    }

?>