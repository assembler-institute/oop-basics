<?php

    class User {
        const USER_ROLE = 'user';

        private $name = 'Juan';
        private $lastName = 'Solano';
        private $age = '36';

        public function setName($name) {
            $this->name = $name;
            return $this;
        }

        public function getName() {
            return $this->name;
        }

        public static function getPermissions() {
            return ['read',
                    'write'
            ];
        }
    }

    $user = new User();
    echo $user->getName();
    echo '<br><br>';
    print_r(User::getPermissions());

?>