<?php
require_once("moderno.php");

$objDance = new dance("dance", "physical", "bachata", "social dance", 12 /*meses*/);
$objModerno = new moderno("dance", "physical", "moderno", "abstract ideas", 2 /*años*/);

$objDance-> setInfo("This style of Latin dance founded by the Dominican Republic is the host, you will not regret learning");

$objModerno-> setInfo("The origin of modern dances is located in the United States at the end of the 19th century. 
Specifically in the year 1889, when John Philip Sousa created a rhythm called the Washington Post March. 
It was a couple dance known as Two step, with quick steps and jumps.");

echo $objDance-> typeOfEntertainment;
echo "</br>";
echo $objDance-> typeOfEffort;
echo "</br>";
echo $objDance-> getInfo();
echo "</br>";
echo $objDance-> getTypeOfDance();
echo "</br>";
echo $objDance-> getTypeOfMovement();
echo "</br>";
echo $objDance-> getDominationTime()." años";
echo "</br>";
echo "</br>";
echo $objModerno-> typeOfEntertainment;
echo "</br>";
echo $objModerno-> typeOfEffort;
echo "</br>";
echo $objModerno-> getInfo();
echo "</br>";
echo $objModerno-> getTypeOfDance();
echo "</br>";
echo $objModerno-> getTypeOfMovement();
echo "</br>";
echo $objModerno-> getDominationTime()." años";
echo "</br>";
echo $objModerno-> getStretching();
echo "</br>";
echo moderno::$status;

?>