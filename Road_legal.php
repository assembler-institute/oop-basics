<?php
require_once('Vehicle.php');


class RoadLeagal extends Vehicle {
    private static $numOfCars = 0;
    private $activeAero;

    public function __construct($make, $model, $year, $activeAero) {
        parent::__construct($make, $model, $year);
        $this->activeAero = $activeAero;
        self::$numOfCars++;
    }

    public function getActiveAero() {
        return $this->activeAero;
    }

    public function setActiveAero($activeAero) {
        $this->activeAero = $activeAero;
    }

    public function startAero() {
        return "The active aerodinamic is working.<br>";
    }

    public static function getNumOfCars() {
        return self::$numOfCars;
    }
}

$electricCar = new RoadLeagal('Pagani', 'Huayra', 2011, 'Active');
echo $electricCar->getMake(), '<br>';
echo $electricCar->getModel(), '<br>';
echo $electricCar->getYear(), '<br>';
echo $electricCar->getActiveAero(), '<br>';
echo RoadLeagal::getNumOfCars(), '<br><br>';



?>