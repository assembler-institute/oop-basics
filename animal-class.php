<?php

class animals {
    public $type;
    public $age;
    public $vertebrates;
    public $warmBlooded;


function __construct(string $type, int $age, bool $vertebrates, bool $warmBlooded){
    $this->$type=$type; 
    $this->$age=$age;
    $this->$vertebrates=$vertebrates;
    $this->$warmBlooded=$warmBlooded; 
}


function showAnimal(string $type, int $age, bool $vertebrates, bool $warmBlooded){
    if ($vertebrates === true){
       $subType = "vertebrates";
       return $subType;
    }else{
        $subType = "invertebrates";
        return $subType; 
    } 

    if( $warmBlooded === true){ 
    $blood = "warm-blooded";
    return $blood;
    }else{
    $blood = "cold-blooded";
    return $blood;
    }

echo "
    <p><b>Animal</p></b><pre>
    Type: $type,
    Subtype: $subType,
    Age: $age,
    Group: $blood,
    </pre><hr>";

}
}
?>

/// How to get variable from if???

