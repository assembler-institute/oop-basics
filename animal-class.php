<?php

class animals {
    public $type;
    public $age;
    public $vertebrates;
    public $warmBlooded;


function __construct(string $name, string $type, int $age, bool $vertebrates, bool $warmBlooded){
    $this->$name=$name;
    $this->$type=$type; 
    $this->$age=$age;
    $this->$vertebrates=$vertebrates;
    $this->$warmBlooded=$warmBlooded; 
}


function showAnimal(string $name, string $type, int $age, bool $vertebrates, bool $warmBlooded){
   $subType = true; 
   $blood = true; 
    if ($vertebrates === true){
       $subType = "vertebrates";  
    }else{
        $subType = "invertebrates"; 
    } 

    if( $warmBlooded === true){ 
    $blood = "warm-blooded";
    }else{
    $blood = "cold-blooded";
    }

echo "
    <h1>$name</h1>
    <b>Type:</b> $type,<br>
    <b>Subtype:</b> $subType,<br>
    <b>Age:</b> $age,<br>
    <b>Group:</b> $blood,<br>";

}

function canBreath(string $name, string $breath){
 echo "<p><b>How Do $name Breathe?</b></p> $breath";
}

function canMove(string $name, string $movement){
    echo "<p><b>How Do $name move?</b></p> $movement";
}

function makeSound(string $name, string $sound){
    echo "<p><b>Does $name make any sound?</b></p> $sound";
}




function __destruct(){
    print "Destruct " . __CLASS__ . "\n";
}
}
?>


