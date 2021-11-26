<?php

class Character extends Type implements Habilities
{
    protected string $name;
    protected string $gender;
    protected int $age;
            
    public function __construct(string $name,string $gender,int  $age,string $nameType,string $HeightType)
    {
        parent::__construct($nameType,$HeightType);
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;

    }
        
    /**
     * __destruct
     *
     * @return void
     */
    public function  __destruct()
    {
        echo "<br>DESTROYED: " . $this->name . " with gender " . $this->gender . " and race " . $this->age." type: ".$this->nameType." Height ".$this->HeightType;
    }

    /**
     * Get the value of name
     */     
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

     /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    
    public function run(){
        return $this->name." is running";
    }

    public function throw($element){
        return $this->name." has thrown ".$element;
    }

    public function getNameType(){
        return "NameType";
    }

    public function getHeightType(){
        return "HeightType";
    }

    public function __toString()
    {
        return "Name: ".$this->name."<br>Gender: ".$this->gender."<br>Race: ".$this->age."<br>";
    }


}

class Heroe extends Character{
    
    public string $power = 'Nothing';
    public static string $world = 'Fantasy World';
    
    public function __construct(string $name,string $gender,int  $age,string $nameType,string $HeightType, string $power)
    {
        parent::__construct($name,$gender,$age,$nameType,$HeightType);
        $this->name = "Super ".$name;

        $this->power = $power;
    }
    

    /**
     * Get the value of power
     */ 
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set the value of power
     *
     * @return  self
     */ 
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    public function getName()
    {
        return "This method is overrride: ".$this->name;
    }

    public function __toString()
    {
        return "Name: ".$this->name."<br>Gender: ".$this->gender."<br>Race: ".$this->age."<br>". "Power:".$this->power."<br>";
    }

    public static function powerRequest()
    {
        return "Power achieved";
    }

}

abstract class Type{
    public string $nameType;
    public string $HeightType;
    
    public function __construct(string $nameType,string $HeightType)
    {
        $this->nameType = $nameType;
        $this->HeightType = $HeightType;   
    }

    public abstract function getNameType();
    public abstract function getHeightType();

    public function imprimir(){
        print $this->getNameType();
    }
    
}

interface Habilities
{
    public function run();
    public function throw($element);
}

/* BASE CLASS */
//(string $name,string $gender,int  $age,string $nameType,string $HeightType)
$c = new Character("Mario","Man",35,"human","1.65");
echo $c;

echo $c->getName();
echo "<br>";

/* HERENCY CLASS CHARACTER */
//(string $name,string $gender,int  $age,string $nameType,string $HeightType, string $power)
$m = new Heroe("Luigi","Man",38,"Human","1.75","Fire");
echo $m;

/* STATIC METHOD */
echo Heroe::powerRequest();
echo "<br>";

/* STATIC PROPERTY */
echo Heroe::$world;
echo "<br>";

echo $m->getPower();
echo "<br>";

/* OVERRIDING */
echo $c->getName();
echo "<br>";
echo $m->getName();

/* ABSTRACT CLASS */
echo "<br>";
echo $c->getNameType();
echo "<br>";
echo $c->getHeightType();


/* INTERFACE */
echo "<br>";
echo $m->run();
echo "<br>";
echo $m->throw("Fire");
echo "<br>";

