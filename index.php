<?php

    require_once('admin.php');

    $Ynohe = new role("Ynohe", "Sandoval", 27, "Spain", "Male", 380008);
    echo "Name: ".$Ynohe->getName()."<br>";
    echo "Last Name: ".$Ynohe->getLastName()."<br>";
    echo "Age: ".$Ynohe->getAge()."<br>";
    echo $Ynohe->getInfo()."<br>";

    $Berta = new Admin("Berta", "Garcia", 29, "Spain", "Female", 65054321, "Admin");
    echo $Berta->getName()."<br>";
    echo "Last Name: ".$Berta->getLastName()."<br>";
    echo "Age: ".$Berta->getAge()."<br>";
    echo "Country: ".$Berta->getCountry()."<br>";
    echo "Role: ".$Berta->getRole()."<br>";