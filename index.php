<?php

require_once('./Spectacles.php');
require_once('./StageSpectacles.php');
require_once('./Plays.php');

echo Plays::$theater." 2023 programme.<br>Plase introduce the registration information.<br><br>";
echo "<br>";
echo "<hr>";
$spectacle = New StageSpectacles("Macbeth", "stage", "drama", 9, "ububu");
echo "<br>";
echo $spectacle->welcome();
echo "<br><br>";
$macbeth = New Plays("Macbeth", "stage", "drama", 9, "ububu", "Shakespeare");
$macbeth->setDate("3-2-2024");
echo $macbeth->spectacleNameAndType();
echo "<br>";
echo $macbeth->welcome();
echo "<br>";
echo $macbeth->getType();
echo $macbeth->printCategory();
echo $macbeth->printCompany();
echo $macbeth->ensembleSize();
echo "<br><br>";
echo $macbeth->updatePerformers(8);
echo "<br><br>";
echo $macbeth->updatePerformers(12);
echo "<br><br>";
echo $macbeth->getDate();

echo "<br><br>";
echo "<hr>";
$ubuRoi = New Plays("Ubu Roi", "visual", "absurd", 15, "La Infantona", "Alfred Jarry");
$ubuRoi->setDate("12-6-2023");
echo "<br>";
echo $ubuRoi->spectacleNameAndType();
echo "<br>";
echo $ubuRoi->welcome();
echo "<br>";
echo $ubuRoi->getType();
echo $ubuRoi->printCategory();
echo $ubuRoi->printCompany();
echo $ubuRoi->ensembleSize();
echo "<br><br>";
echo $ubuRoi->getDate();
?>