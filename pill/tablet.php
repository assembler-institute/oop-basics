<?php

require_once 'device.php';

class Tablet extends Device {
  function __construct(
    string $id,
    string $brand, 
    string $model, 
    string $screenSize, 
    string $serialNumber) {
      $this->id = $id;
      $this->brand = $brand;
      $this->model = $model;
      $this->screenSize = $screenSize;
      $this->serialNumber = $serialNumber;
  }

  public function getScreenSize():string {
    return $this->screenSize;
  }

  public function getDetail():string {
    return 
    'Id: ' . $this->getId() . '</br>
    Brand: ' . $this->getBrand() . '</br>
    Model: ' . $this->getModel() . '</br>
    Screen size: ' . $this->getScreenSize() . '</br>
    Serial Number: ' . $this->getSerialNo() . '</br>';
  }
}