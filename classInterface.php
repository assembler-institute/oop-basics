interface ShowEmployee{
    public function showName();
    public static function showAge();
}

class Employee2 implements ShowEmployee{
    public $name = "Juan";
    public static $age = 24;

    public function showName(){
        echo "<br>el nombre es: ".$this->name;
    }
    public static function showAge()
    {
        echo "<br>".self::$age;
    }
}