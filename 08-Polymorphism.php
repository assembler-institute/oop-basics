<?php

    class User {
        const USER_ROLE = 'user';

        public string $name = 'Juan';
        private $lastName = 'Solano';
        private $age = '36';

        public function getName() {
            return $this->name;
        }
    }

    class Admin extends User {
        const USER_ROLE = 'admin';

        private array $resources = [
            '/users/management',
            '/users/emails',
            '/users/files',
        ];
    }

    class Manager extends User {
        const USER_ROLE = 'manager';

        private array $resources = [
            '/users/management'
        ];
    }
    
    class Role {
        public function addUser(User $user): void {
            array_push($roles, $user->getName());
        }
    }
    
    $roles = new Role();

    var_dump($roles);

    $user = new User();
    $roles->addUser($user);

    $manager = new Manager();
    $roles->addUser($manager);

    $admin = new Admin();
    $roles->addUser($admin);

?>