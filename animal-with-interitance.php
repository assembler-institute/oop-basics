<?php 
require_once("animal-class.php");
require_once("animal-object.php");

class cats extends animals{
    public $breed;

    function __construct(string $name, string $type, int $age, bool $vertebrates, bool $warmBlooded, string $breed){
        parent::__construct($name, $type, $age, $vertebrates, $warmBlooded);
        $this->breed=$breed;
    }

 public function showBreed(string $breed){
    echo "<b>Breed:</b> $breed <br>";
}

public function makePurr(string $purr){
    echo "<br><br><b>Purr:</b> $purr <br>
    <audio controls><source src='sound/cat.mp3' type='audio/mpeg'>
      </audio>";
}

public function getAge(){
    return $this->age;
}

public function setAge($ageNew){
    $this->age = $ageNew;
    return $this;  
}

public function makeSound(string $name, string $sound){
    echo "<p><b>How speaks a $name?</b></p> $sound";
    return $sound;
}
    
}





?>