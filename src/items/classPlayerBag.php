 <?php
 require_once('../config.php');
 require_once(SITE_ROOT . '/src/items/classSmartphone.php');

 final class PlayerBag
 {

   private int $capacity;
   private Smartphone $smartphone;


   function __construct(int $capacity, Smartphone $smartphone)
   {
     $this->capacity = $capacity;
     $this->smartphone = $smartphone;
   }

   function getSmartphone(): Smartphone {
    return $this->smartphone;
   }

   function toString(): void
   {
     echo "Bag Capacity - <strong>" . $this->capacity . ' articles</strong><br>' .
    "<h2>Smartphone:</h2>";
     echo $this->smartphone->toString() . '<br>';
   }
 }