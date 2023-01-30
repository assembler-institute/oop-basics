<?php
require_once("dance.php");


class moderno extends dance 
{
    static $status ="Active";
    public function __construct(string $typeOfEntertainment, string $typeOfEffort, string $typeOfDance, string $typeOfMovement, int $dominationTime)
   {
      parent::__construct($typeOfEntertainment, $typeOfEffort, $typeOfDance, $typeOfMovement, $dominationTime); 
   }

   public function setInfo(string $info)
   {
      $this->info = $info;
   }
   public function getInfo(): string
   {
      return $this->info . ' ' . "</br><b>creation date:</b>" . date('d-m-y');
   }
   public function getTypeOfDance(): string
   {
      return $this->typeOfDance;
   }
   public function getTypeOfMovement(): string
   {
      return $this->typeOfMovement;
   }
   public function getDominationTime(): float
   {
      return $this->dominationTime;
   }

   public function getStretching(): string
   {
     return "A stretch is estimated to last 20 minutes on average";
   }
   
   function __destruct()
   {
      echo "</br>";
      echo "</br>";
      echo "The class moderno is DESTROYED <br>";
   }




}
