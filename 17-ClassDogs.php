<?php

Class Dogs {

    public string $name = "";
    public string $breed = "";
    public int $age = 0;
    
    public function __construct ( string $name1, string $breed1, int $age1) {
    $this -> name = $name1;
    $this -> breed = $breed1;
    $this->age = $age1;
}

public function getDogsData() {

    $data = "
        <h2> Data Dogs </h2>
        Name : {$this->name}<br>
        Breed : {$this ->breed}<br>
        Age : {$this->age}<br>
    ";
    return $data;
}
}

/* 3 methods Formats !!!


public function setName () {
    return $this -> name;
}

public function getName ($name) {
    $this -> name = $name;
    return $this -> name;    
} 

public function setBreed () {
    return $this -> breed;
}

public function getBreed ($breed) {
    $this -> breed = $breed;
    return $this;
}

public function setAge () {
    return $this -> age;
}

public function getAge ($age) {
    $this -> age = $age;
    return $this;
} */


?>