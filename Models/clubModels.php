<?php

//require_once "./dbConnection.php";

function get(){
    $trainer = new Trainer (1,'Ash','21','Pueblo Paleta','Pikachu');
    echo $trainer->getData();
    echo $trainer->getPokemon();

    $lider = new Lider(1,'Misty','18','Ciudad Plateada','Staryu','Agua');
    echo $lider->getData();
}


class Trainer implements Club{
    public $id;
    public $name;
    public $age;
    public $city;
    public $pokemon;

    public function __construct( int $id, string $name, int $age,string $city, string $pokemon)
    {
        $this->id =$id;
        $this->name =$name;
        $this->age =$age;
        $this ->city =$city;
        $this->pokemon=$pokemon;
    }

    function getData(){
        $data="
        <h2>Trainer Personal Data</h2>
        <p> Name: {$this->name}</p>
        <p> Age: {$this->age}</p>
        <p> City: {$this->city}</p>
        ";
        return $data;
    }


    public function getPokemon():string{
        $data="
        <h3>Main Pokemon</h3>
        <p> Trainer: {$this->name}</p>
        <p> Pokemon: {$this->pokemon}</p>
        ";
        return $data;
    }

    public function __destruct()
    {
    }

}

class Lider extends Trainer{
    public static $gym;

    public function __construct(int $id, string $name, int $age,string $city, string $pokemon, string $gym){
        parent::__construct($id, $name, $age, $city,$pokemon);
        $this->gym=$gym;
    }

    function getData(){
        $data="
        <h2>Lider Data</h2>
        <p> Name: {$this->name}</p>
        <p> City: {$this->city}</p>
        <p> Pokemon: {$this->pokemon}</p>
        <p> Gym: {$this->gym}</p>
        ";
        return $data;
    }

    public function getPokemon():string{
        $data="
        <h3>Main Pokemon</h3>
        <p> Lider: {$this->name}</p>
        <p> Pokemon: {$this->pokemon}</p>
        ";
        return $data;
    }

}


interface Club{
    public function getData();
    public function getPokemon():string;
}



abstract class Fighter extends Trainer{
    public $exp;
    public $medals;

    public function __construct(int $id, string $name, int $age,string $city, string $pokemon, int $exp, int $medals){
        parent::__construct($id, $name, $age, $city,$pokemon);
        $this->exp=$exp;
        $this->medals=$medals;
    }

    abstract public function setMedals(string $medals);
    abstract public function getMedals():string;

}

?>