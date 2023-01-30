<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

<div class="container-md">  

<?php
require_once ("animal-class.php");
require_once ("animal-with-interitance.php");
require_once ("interface.php");
require_once ("abstract-class.php");


$tiger = new animals("Tiger", "Mammal", 10, true, true);
$tiger->showAnimal("Tiger", "Mammal", 10, true, true);
$tiger->canBreath("Tiger", "The respiratory system consists of the lungs. Just like humans and all mammals, Siberian tigers breathe through their nose and mouth into their lungs.");
$tiger->canMove("Tiger", "They can run, jump, climb. The hind legs of the tiger are longer than their front legs. This characteristic enables them to leap forward distances up to 10 meters.");
$tiger->makeSound("Tiger", "They growl, roar, chuff and moan.");

$crocodile = new animals("Crocodile", "Reptiles", 25, true, false);
$crocodile->showAnimal("Crocodile", "Reptiles", 25, true, false);
$crocodile->canBreath("Crocodile", "When basking on land with the mouth open, crocodilians breathe mostly through their mouth (the throat/palatal valve is open). When in water, the mouth is usually closed and they breathe mostly through their nostrils.");
$crocodile->canMove("Crocodile", "The right front and left rear legs are lifted and moved forward while the front right and rear left legs, already on the ground, push backwards, propelling the crocodile's body forward.");
$crocodile->makeSound("Crocodile", "Adults crocodiles hiss and bellow at each other. Babies chirp when they hatch.");

$cat = new cats ("Cat", "Mammal", 2, true, true, "Maine Coon");
$cat->setAge($cat->getAge()*7);
$age = $cat->age;
$cat->showAnimal("Cat", "Mammal", $age, true, true, "Maine Coon");
$cat->showBreed("Maine Coon");
$cat->canBreath("Cat", "A healthy respiratory (breathing) rate for a cat is usually between 20 and 30 breaths per minute.");
$cat->canMove("Cat", "Cats are digitigrade; that is, they walk on their toes.");
#$cat->makeSound("Cat", "Already in ancient Egypt the quintessential sound of a cat was “meow”, which meant “cat”. This sound can last between a fraction of a second and various seconds and cats produce it by opening their mouth and then gradually closing it again.<br><br>");
$cat->makePurr("Cats purr when they're content");
/*$cat->getMeow();
$cat->setMeow("Meoooooow");*/
$cat->makeSound("cat", "meoww");


echo "<br><hr>INTERFACE";
//Interface
$dog = new Dog();
$mouse = new Mouse();
$animals = array($dog, $mouse);

foreach($animals as $animal) {
    $animal->eat();
    $animal->move();
  }
 

// Create objects from the child classes
echo "<br><p><b>ABSTRACT CLASS</p></b>";
$leon = new Leon("Leon", "long");
echo $leon->whoAreYou();
echo "<br>";

$pantera = new Pantera("Pantera", "median");
echo $pantera->whoAreYou();
echo "<br>";

$tiger = new Tiger("Tiger", "very long");
echo $tiger->whoAreYou() . "<br><br>";

?>

</div>
</body>
</html>