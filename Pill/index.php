<?php

require_once ("02-inherit-class.php");
require_once ("03-abstract-class.php");


$myFruit = new Fruit('mandarin', 'orange', 'acid');
echo $myFruit->getFruitDetails();
echo "<br>";
echo $myFruit->Feed();
echo "<br>";
echo $myFruit->Hydrate();
echo "<br>";
echo $myFruit->Regular();
echo "<br>";
$Kiwi = new Kiwi ('kiwi', 'green', 'acid', 'china');
echo $Kiwi->getFruitDetails();
echo "<br><br>";
echo $Kiwi->getVitamin();
echo "<br><br><br>";

$Lemons = new Lemon;

$Lemons->Uses();
echo $Lemons->values("flu");



?>