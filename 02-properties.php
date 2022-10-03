<?php

    class User{
        // public, can be accessed from everywhere
        public string $name = 'Juan';

        // protected, can be accessed only with the class by inheriting or from parent classes
        protected string $lastName = 'Solano';

        // private, can only be accessed by the class that defines the member
        private int $age = 36;
    }

    $user = new User();
    var_dump($user);
    echo '<br><br>';
    echo $user->name;
    echo '<br><br>';
    // lastName and Age give errors for protected and private, except with var_dump and Class
    echo $user->lastName;
    echo '<br><br>';
    echo $user->age;

?>