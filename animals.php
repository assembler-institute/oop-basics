<?php

require_once("classAnimals.php");
require_once("classData.php");

$objanimal = new Animal('Fry', 'perro', 2);
// echo $objanimal -> strName;
// echo "<br>";
// echo $objanimal -> strAnimal;
// echo "<br>";
// echo $objanimal -> intAge;
echo $objanimal -> getDataAnimal();
echo Data::$strStatus;



?>