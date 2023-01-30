<?php
require_once('./Plane.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>OOP Basics</title>
</head>

<body>
    <h1>Vehicle - Superclass</h1>
    <?php
    $vehicle = new Vehicle(1, 'Transport', 36000, 5, 8.9, 'Electric');
    echo '<pre>';
    print_r($vehicle->getToolInfo());
    echo '</pre>';
    ?>

    <hr>

    <h1>Plane - Subclass</h1>
    <?php
    $plane = new Plane(2, 'Transport', 1280000, 180, 9.9, 'Kerosene', 5);
    echo '<pre>';
    print_r($plane->getToolInfo());
    echo '</pre>';
    ?>
</body>

</html>