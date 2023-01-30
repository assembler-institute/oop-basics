<?php
interface AliveAnimal{
    public function eat();
    public function move();
}

class Dog implements AliveAnimal {
    
    public function eat() {
      echo "<br><b>Dog</b> likes meat <br>";
    }

    public function move() {
        echo "<b>Dog</b> can run, jump, climb <br>";
      }
  }
  

  class Mouse implements AliveAnimal {
    
    public function move() {
      echo "<b>Mouse</b> can run, jump, climb <br>";
    }
    
    public function eat() {
    echo "<b>Mouse</b> likes cheese <br>";
  }

  }

?>