<?php

    class User{
        // CONST cant be variable, property or function call
        const USER_ROLE = 'user';

        private string $name = 'Juan';
        private string $lastName = 'Solano';
        private int $age = 36;

        // STATIC must be declared ClassName::$var;
        public static string $userPrefix = 'ES-2022_';


    }

    $user = new User();
    
    echo '<pre>';
    var_dump($user);
    echo '</pre>';

    echo '<br><br>';

    // echo $user->name;
    // echo '<br><br>';
    // echo $user->lastName;
    // echo '<br><br>';
    echo User::USER_ROLE;
    echo '<br><br>';
    echo User::$userPrefix;

?>