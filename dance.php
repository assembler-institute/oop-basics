<?php
require_once("entertainment.php");

class dance extends entertainment
{
   protected $typeOfDance;
   protected $typeOfMovement;
   protected $dominationTime;

   public function __construct(string $typeOfEntertainment, string $typeOfEffort, string $typeOfDance, string $typeOfMovement, int $dominationTime)
   {
      parent::__construct($typeOfEntertainment, $typeOfEffort);
      $this->typeOfDance = $typeOfDance;
      $this->typeOfMovement = $typeOfMovement;
      $this->dominationTime = $dominationTime;
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
      return $this->dominationTime / 12;
   }
   function __destruct()
   {
      echo "</br>";
      echo "</br>";
      echo "The class dance is DESTROYED <br>";
   }
}
