<?php


require_once("classData.php");

$objanimal1 = new Animal('loko', 'gato', '> 5');
echo $objanimal1 -> gender('feme');
echo "<br>";
echo $objanimal1 -> Sound('miau');
echo "<br>";

$objanimal = new Data('Fry', 'perro', '< 5', 'marron');
// echo $objanimal -> strName;
// echo "<br>";
// echo $objanimal -> strAnimal;
// echo "<br>";
// echo $objanimal -> intAge;
echo $objanimal -> getDataAnimal();
// echo "<pre>";
// print_r ($objanimal -> getDataAnimal());
// echo '</pre>';


echo Data::$strStatus;



?>