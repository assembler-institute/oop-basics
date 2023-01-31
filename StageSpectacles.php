<?php

require_once('./Spectacles.php');

class StageSpectacles extends spectacles{
    protected $category;
    protected $performersNumber;
    protected $company;

    public function __construct(string $spectacleName, string $spectacleType, string $category, int $performersNumber, string $company)
    {
        parent::__construct($spectacleName, $spectacleType);
        $this->category = $category;
        $this->performersNumber = $performersNumber;
        $this->company = $company;
    }

    public function welcome():string{
        return "To reach the Apollo Theater 2023 programme, please supply more information.";
    }

    public function spectacleNameAndType():string{
        return "This " . self::SPECTACLE . " is called " . $this->spectacleName . " and is of type " . $this->spectacleType . ".<br>";
    }

    public function printCategory():string{
        return $this->category=="drama"?
        "This play is of category: ".$this->category.".":
        "This perform is of category: ".$this->category.".";
    }

    public function ensembleSize():string{
        return $this->performersNumber<10?
        "<br><br>This play has ".$this->performersNumber." performers and therefore is a small ensemble. Please update the number of performers for the Apollo Theater to accept this play.":
        "<br><br>This play has ".$this->performersNumber." performers and therefore is a big ensemble.";
    }

    public function updatePerformers($newPerformersNumber){
        $this->performersNumber = $newPerformersNumber;
        return $this->performersNumber<10? "Please update again. ".$this->performersNumber." performer is not enough." : "This amount of performers is perfect.";
    }

    public function printCompany():string{
        return "<br><br>The company's name is: ".$this->company.".";
    }

    public function __destruct(){
        echo "<br><br>The " . self::SPECTACLE . "/s has/have been successfully registered" . ".<br><br>";
    }
}

?>