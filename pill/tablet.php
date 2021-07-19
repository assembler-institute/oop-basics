<?php

require_once 'device.php';
class Tablet extends Device {
  public $screenSize;

  function __construct($id, $serialNumber, $brand, $model, $screenSize) {
    parent::__construct($id, $serialNumber, $brand, $model);
      $this->screenSize = $screenSize;
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