<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Status</title>
</head>
<body>
    <h1>Car Checker</h1>
    
    <?php 
    require_once("ClassCar.php");

    

    //Instantiate the classes
    $vehicle1= new Car("Tesla", "Model 3", "Dark Space", "Battery", "2022", true);
    // Calling methods
    echo $vehicle1->getChosenCar();
    echo $vehicle1->getBoolElectric();
    echo $vehicle1->checkITV();
    echo $vehicle1->checkEnterCity();
    echo $vehicle1->getSerialNumber();
    echo $vehicle1->co2Levels();
    echo $vehicle1->noiseLevels();

    // Using this method we can call a static method and switch between it and a public one to check if the vehicle can circulate
    echo $vehicle1->switchStatusCirculation();

    echo "<hr>";
    $vehicle2= new Car("Opel", "Astra", "Blue", "Diesel", "1957", false);
    echo $vehicle2->getChosenCar();
    echo $vehicle2->getBoolElectric();
    echo $vehicle2->checkITV();
    echo $vehicle2->checkEnterCity();
    echo $vehicle2->getSerialNumber();
    echo $vehicle2->co2Levels();
    echo $vehicle2->switchStatusCirculation();
    echo $vehicle2->noiseLevels();
    

    

    ?>
</body>
</html>
