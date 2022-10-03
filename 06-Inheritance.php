<?php

    class User {
        const USER_ROLE = 'user';

        protected string $name;
        protected string $lastName;
        protected int $age;
        private string $NickName;
    }

    // Class Admin can access to User properties like name, lastName and age because are protected, but nickName are private and cant access
    // and add $resources only available for Admin

    class Admin extends User {
        const USER_ROLE = 'Admin';
        private array $resources = [
            '/users/management',
            '/users/emails',
            '/users/files',
        ];
    }

?>