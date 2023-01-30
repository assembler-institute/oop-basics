<?php

require_once("ClassDogs.php");

$dog1 = new Dogs("Max", "Bulldog", 10);

$pet1 = $dog1->getDogsData();

echo $pet1;

require_once("ClassDogs2.php");

$dog2 = new Dogs2( "Maxi", "Max", "Bulldog", 10, "Dog");

$pet2 = $dog2->getDogsData1();

echo $pet2;

?>