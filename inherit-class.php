<?php
use InterfaceFile\Dealership;

require './base-class.php';
require './interface.php';

class Brand extends Vehicle implements Dealership{
    static Int $idBrand = 1;

    protected String $strBrand;
    protected String $strModel;

    private Int $price;
   
    public function __construct(String $dealership, Bool $open, String $type, String $style, String $energy){
        parent::__construct($dealership, $open, $type, $style, $energy);
    }

    public function setBrand(String $brand, String $model){
        $this->strBrand = $brand;
        $this->strModel = $model;
    }

    public function setPrice(Int $setPrice){
        $this->price  = $setPrice;
    }

    public function getBrand(){
        return $this->strBrand;
    }

    public function getModel(){
        return $this->strModel;
    }

    public function getVehicle(): String{
        $vehicle = "
        <p>Type: $this->strType</p>
        <p>Energy: $this->strEnergy</p>
        <p>Style: $this->strStyle</p>
        <p>Brand:".$this->strBrand."</p>
        <p>Model:".$this->strModel."</p>";

        return $vehicle;
    }
    
    public function statusDealership(){
        $hiText = "<h1>You are buying in ".$this->getDealership()."</h1>";
        if($this->getOpen()){
            $status = "<p style='background:green;text-align:center;'>We are open!</p>";
        }else{
            $status = "<p style='background:red;text-align:center;'>Sorry, we are close</p>";
        }
        return $hiText.$status;
    }

    public function showPrice(){
       if(isset($this->price)){
        return '<p>Price:'.$this->price.'</p>';
       }else{
        return '<button>Ask for the price</button><br>';
       }
    }
}

echo "<p>Id brand:".Brand::$idBrand."<p/>";

$vehicle = new Brand('All Motors', true, 'Truck', '4x4', 'Fuel');

$vehicle->setBrand('Toyota', 'Land Cruiser');

echo $vehicle->statusDealership();

echo $vehicle->getVehicle();

echo $vehicle->setPrice(8000);

echo $vehicle->showPrice();
?>