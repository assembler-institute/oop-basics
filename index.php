<?php

    require_once('./09-b-Test.php');

    $insect = new Animal('Insect', false, '1 Month');
    $mammal = new Animal('Mammal', true, '20 years');
    $marsupial = new Marsupial('Mammal', true, '30 years');

    echo '<pre>';
    var_dump($insect);
    echo '</pre>';

    $insectType = $insect->getType();
    $insectVertebrate = $insect->getVertebrate();
    $insectTimeLife = $insect->getTimeLife();

    echo '<pre>';
    var_dump($mammal);
    echo '</pre>';

    $animalType = $mammal->getType();
    $animalVertebrate = $mammal->getVertebrate();
    $animalTimeLife = $mammal->getTimeLife();

    echo '<pre>';
    var_dump($marsupial);
    echo '</pre>';

    $marsupialType = $marsupial->getType();
    $marsupialVertebrate = $marsupial->getVertebrate();
    $marsupialTimeLife = $marsupial->getTimeLife();

    echo '<br>';
    echo $insectType;
    echo '<br>';
    var_dump($insectVertebrate);
    echo '<br>';
    echo $insectTimeLife;
    echo '<br>';

    echo '<br>';
    echo $animalType;
    echo '<br>';
    var_dump($animalVertebrate);
    echo '<br>';
    echo $animalTimeLife;
    echo '<br>';

    echo $marsupial->liveIn;
    echo '<br><br>';

    echo '<br>';
    echo $marsupialType;
    echo '<br>';
    var_dump($marsupialVertebrate);
    echo '<br>';
    echo $marsupialTimeLife;
    echo '<br>';
    echo '<br><br>';

?>