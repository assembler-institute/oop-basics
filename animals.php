<?php

require_once("classData.php");

$objanimal = new Animal('loko', 'gato', '> 5');
echo $objanimal -> getDataAnimal();
echo "<br>";

$objanimal1 = new Data('Fry', 'perro', '< 5', 'marron');
echo $objanimal1 -> getDataAnimal();
echo "<br>";

echo $objanimal -> gender('female');
echo "<br>";
echo $objanimal -> Food();
echo "<br>";
echo Data::$strStatus;
echo "<br>";

echo $objanimal -> Sound('Miau');
echo "<br>";
echo $objanimal -> Displacement('walk');
echo "<br>";

echo "<pre>";
print_r ($objanimal -> Breath('lru'));
echo '</pre>';
echo "<br>";
echo $objanimal -> Move('terrestrial');
echo "<br>";

?>















<!--echo $objanimal -> strName;
echo "<br>";
echo $objanimal -> strAnimal;
echo "<br>";
echo $objanimal -> intAge;