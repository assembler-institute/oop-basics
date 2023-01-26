 <?php
 require_once('src/items/classSmartphone.php');

 final class PlayerBag
 {

   private int $capacity;
   private Smartphone $smartphone;
   private array $myPokemon;


   function __construct(int $capacity, Smartphone $smartphone, array $myPokemon)
   {
     $this->capacity = $capacity;
     $this->smartphone = $smartphone;
     $this->myPokemon = $myPokemon;
   }

 }