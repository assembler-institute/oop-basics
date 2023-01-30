<?php

require_once("ClassInterface.php");
abstract class Animals {

    public string $name = "";
    public int $age = 0;

    public function __construct(string $name, int $age) {
        $this-> name = $name;
        $this->age = $age;
    }

    public function getAnimalsData() {

        $data = "
        <h2>Animals Data</h2>
        Name : {$this->name}<br>
        Age : {$this->age}
    ";
        return $data;
}
}

?>