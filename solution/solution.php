<?php

interface iUser
{
    // Interfaces cannot have properties

    // All interface methods must be public
    public function login($username, $password);
    public function logout();
}

class User implements iUser
{
    protected string $username;
    protected int $age;
    protected string $gender;
    protected string $email;
    private string $password;
    private bool $isConnected = false;

    // PHP will call __destruct at the end of the script, when the object is destructed or the script is stopped or exited.
    function __destruct()
    {
        $this->logout();
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function login($username, $password)
    {
        if (isset($username) && isset($password)) {
            $this->isConnected = true;
        }
    }

    public function logout()
    {
        $this->isConnected = false;
    }
}

abstract class AdminUser extends User
{
    protected bool $hasPower;

    public function deleteCustomerUser(): void
    {
        // return;
    }
}

class EmployeeUser extends AdminUser
{
    public function __construct($username, $age, $gender, $email, $password, $hasPower)
    {
        $this->username = $username;
        $this->age = $age;
        $this->gender = $gender;
        $this->email = $email;
        $this->password = $password;
        $this->hasPower = $hasPower;
    }

    public function showSpecs(): string
    {
        return $this->username . " has " . $this->age . " years old and is a " . $this->gender;
    }
}

abstract class CustomerUser extends User
{
    protected bool $isVerified;
    protected bool $isPremium;

    public function __construct($username, $age, $gender, $email, $password, $isPremium, $isVerified)
    {
        $this->username = $username;
        $this->age = $age;
        $this->gender = $gender;
        $this->email = $email;
        $this->password = $password;
        $this->isPremium = $isPremium;
        $this->isVerified = $isVerified;
    }

    public function getMatchUsers(int $numberOfMatches): array
    {
        return [];
    }

    public function setMatchUser(string $username): void
    {
        // 
    }
}

class RegularUser extends CustomerUser
{
    const LIMIT_MATCHES = 20;
    private $numberOfMatches = 0;

    public function __construct($username, $age, $gender, $email, $password, $isPremium, $isVerified)
    {
        // we use same constructor as father class with parent keyword and double colon
        parent::__construct($username, $age, $gender, $email, $password, $isPremium, $isVerified);
    }

    public function getMatchUsers(int $numberOfMatches): array
    {
        if ($numberOfMatches < self::LIMIT_MATCHES) {
            return [];
        };

        return [];
    }

    public function showSpecs(): string
    {
        return $this->username . " has " . $this->age . " years old and is a " . $this->gender;
    }

    public function matchUser($numberOfMatches): void
    {
        $this->numberOfMatches = $numberOfMatches + 1;
    }
}

class PremiumUser extends CustomerUser
{
    private string $expiringDate;

    public function __construct($username, $age, $gender, $email, $password, $isPremium, $isVerified, $expiringDate)
    {
        // we use same constructor as father class with parent keyword and double colon
        parent::__construct($username, $age, $gender, $email, $password, $isPremium, $isVerified);
        // and add new arguments necessary for the new son class
        $this->expiringDate = $expiringDate;
    }

    public function showSpecs(): string
    {
        return $this->username . " has " . $this->age . " years old and is a " . $this->gender;
    }

    public function getWhoHasSeenYou(): array
    {
        return [];
    }

}

$employeeUser = new EmployeeUser("John", 32, "alpha male", "john@mail.org", "1234", true); 
$regularUser = new RegularUser("Michael", 22, "gamma male", "michael@mail.org", "abcd", true, false);
$premiumUser = new PremiumUser("Barbara", 33, "femme fatale", "barbara@mail.org", "6666", true, true, "2024-11-12");

echo $employeeUser->showSpecs();
echo '<br />';
echo $regularUser->showSpecs();
echo '<br />';
echo $premiumUser->showSpecs();
