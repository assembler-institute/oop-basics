// create php Base class that will be inherited at least once.
This base case must have at least:
3 properties
3 methods
1 constructor and 1 destructor //

<?php 
class BaseClass {
  protected $property1;
  protected $property2;
  protected $property3;
  
  public function __construct($p1, $p2, $p3) {
    $this->property1 = $p1;
    $this->property2 = $p2;
    $this->property3 = $p3;
  }

  public function method1() {
    // code here
  }

  public function method2() {
    // code here
  }

  public function method3() {
    // code here
  }

  public function __destruct() {
    // code here
  }
}
?>

// create php class that inherits the base class.
This class must add:
1 static property
1 method //

<?php 

class InheritedClass extends BaseClass {
    protected static $static_property;
    protected $property2;
  
    public function __construct($p1, $p2, $p3) {
      parent::__construct($p1, $p2, $p3);
      $this->property2 = $p2;
    }
  
    public function newMethod() {
      // code here
    }
    
    public function method2() {
      // code here (override)
    }
  }
  ?>

// One abstract class with at least:
2 properties
2 methods
//

<?php
abstract class AbstractClass {
    protected $property1;
    protected $property2;
  
    public function __construct($p1, $p2) {
      $this->property1 = $p1;
      $this->property2 = $p2;
    }
  
    abstract public function method1();
  
    abstract public function method2();
  }

?>


// One interface that must be implemented by one class.
This interface must have at least 2 methods. //

<?php
interface ExampleInterface {
    public function method1();
    public function method2();
  }
  
  class ExampleClass implements ExampleInterface {
    public function method1() {
      // code here
    }
  
    public function method2() {
      // code here
    }
  }

?>


// Other option with interface and inheretence //

<?php

interface AliveAnimal {
  public function breath();
  public function move();
}

abstract class Animal implements AliveAnimal {
  protected $age;
  protected $fur;
  protected $vertebrates;
  protected $type;

  public function __construct($age, $fur, $vertebrates, $type) {
    $this->age = $age;
    $this->fur = $fur;
    $this->vertebrates = $vertebrates;
    $this->type = $type;
  }

  public function __destruct() {
    // code here
  }

  public function breath() {
    // code here
  }

  public function move() {
    // code here
  }

  public function sound() {
    // code here
  }
}

class Cat extends Animal {
  protected $breed;

  public function __construct($age, $fur, $vertebrates, $type, $breed) {
    parent::__construct($age, $fur, $vertebrates, $type);
    $this->breed = $breed;
  }

  public function purr() {
    // code here
  }
  
  public function sound() {
    // code here (override)
  }
  
  public function meow() {
    // code here
  }
}

abstract class Feline extends Cat {
  protected $whisker_type;

  public function throwObjectInstance() {
    // code here
  }
}

?>