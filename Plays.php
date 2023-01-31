<?php

require_once("./StageSpectacles.php");

class Plays extends stageSpectacles{
    protected $datePremiere;
    protected $author;
    static $theater = "Apollo Theater";

    public function __construct(string $spectacleName, string $spectacleType, string $category, int $performersNumber, string $company, string $author)
    {
        parent::__construct($spectacleName, $spectacleType, $category, $performersNumber, $company);
        $this->author = $author;
    }

    public function welcome():string{
        return "Welcome to the Apollo Theater 2023 programme.";
    }

    public function setDate($date){ /* :string */
        $this->datePremiere = $date;
    }
    
    public function getDate(){ /* :string */
        return "The premiere date is : ".$this->datePremiere.".";
    }
    
    public function getType(){
        $this->category=="drama"?
        $this->isPlay(): $this->isNotPlay();
    }
    
    public function isPlay(){
        echo "<br>It is a play.<br><br>";
    }

    public function isNotPlay(){
        echo "<br>It is not a play.<br><br>";
    }

    public function __destruct(){
        
    }
}

?>