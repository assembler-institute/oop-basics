<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Status</title>
</head>
<body>
    <h1>My Car Checker</h1>
    
    <?php 
    require_once("ClassCar.php");

    

    //Instantiate the classes
    $vehicle= new Car("Tesla", "Mustang", "Dark Space", "Gasolina", "2022", true);
    
    // Calling methods
    echo $vehicle->getChosenCar();
    echo $vehicle->getBoolElectric();
    echo $vehicle->checkITV();
    echo $vehicle->checkEnterCity();
    echo $vehicle->getSerialNumber();

    // Using this method we can call a static method and switch between it and a public one to check if the vehicle can circulate
    echo $vehicle->switchStatusCirculation();
    

    

    ?>
</body>
</html>
