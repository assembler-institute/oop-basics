<?php
include_once './cat.php';
include_once './animal.php';


$cat1 = new Cat(2, true, true, 'mammal', 4);

$animal1 = new Animal(2, true, true, 'mammal');

var_dump($animal1);
