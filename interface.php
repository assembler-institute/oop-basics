<?php
interface AliveAnimal{
    public function eat();
    public function move();
}

class Dog implements AliveAnimal {
    
    public function eat() {
      echo "<b>Dog</b> likes meat <br>";
    }

    public function move() {
        echo "Dog can run, jump, climb";
      }
  }
  

  class Mouse implements AliveAnimal {
    
    public function move() {
      echo "Mouse can run, jump, climb";
    }
    
    public function eat() {
    echo "<b>Mouse</b> likes cheese <br>";
  }

  }

  

?>