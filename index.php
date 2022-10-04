<?php

    require_once('./10-b-Test-Abstract.php');
    require_once('./09-a-Test.php');
    require_once('./09-b-Test.php');

    $insect = new Animal('Insect', false, '1 Month');
    $mammal = new Animal('Mammal', true, '20 years');
    $marsupial = new Marsupial('Mammal', true, '30 years');
    $marino = new Marino('Marine', true, '10 years');




    // SOLO INTERFACE

    echo '<br>';
    echo $insect->greetings();
    echo '<br>';
    echo $insect->getType();
    echo '<br>';
    echo 'Vegeta?';
    echo '<br>';

    // RESTO DE EJERCICIO

    echo '<pre>';
    var_dump($marino);
    echo '</pre>';

    $marinoType = $marino->getType();
    $marinoVertebrate = $marino->getVertebrate();
    $marinoTimeLife = $marino->getTimeLife();
    // $marinoGreet = $marino->greetings();

    echo '<br>';
    echo $marinoType;
    echo '<br>';
    var_dump($marinoVertebrate);
    echo '<br>';
    echo $marinoTimeLife;
    echo '<br>';
    // echo $marinoGreet;
    // echo '<br>';

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
    echo '<br>';

    echo '<br>';
    echo $marsupialType;
    echo '<br>';
    var_dump($marsupialVertebrate);
    echo '<br>';
    echo $marsupialTimeLife;
    echo '<br>';

    echo $mammal->greetings();
    echo '<br>';
    echo $marsupial->greetings();
    echo '<br>';

?>