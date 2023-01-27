<?php
require_once ("animal-class.php");
require_once ("animal-with-interitance.php");


$tiger = new animals("Tiger", "Mammal", 10, true, true);
$tiger->showAnimal("Tiger", "Mammal", 10, true, true);
$tiger->canBreath("Tiger", "The respiratory system consists of the lungs. Just like humans and all mammals, Siberian tigers breathe through their nose and mouth into their lungs.");
$tiger->canMove("Tiger", "They can run, jump, climb. The hind legs of the tiger are longer than their front legs. This characteristic enables them to leap forward distances up to 10 meters.");
$tiger->makeSound("Tiger", "They growl, roar, chuff and moan.");


$crocodile = new animals("Crocodile", "Reptiles", 25, true, false);
$crocodile->showAnimal("Crocodile", "Reptiles", 25, true, false);
$crocodile->canBreath("Crocodile", "When basking on land with the mouth open, crocodilians breathe mostly through their mouth (the throat/palatal valve is open). When in water, the mouth is usually closed and they breathe mostly through their nostrils.");
$crocodile->canMove("Crocodile", "The right front and left rear legs are lifted and moved forward while the front right and rear left legs, already on the ground, push backwards, propelling the crocodile's body forward.");
$crocodile->makeSound("Crocodile", "Of all the reptiles, crocodiles are the most social and vocal. Adults hiss and bellow at each other. Babies chirp when they hatch.");

$cat = new cats ("Cat", "Mammal", 3, true, true, "Maine Coon");
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


echo "<br><br>";
print_r($cat);

?>