<?php

abstract class Device {
  protected $id;
  protected $serialNumber;
  protected $brand;
  protected $model;

  public function getId():string {
    return $this->id;
  }
  
  public function getSerialNo():string {
    return $this->serialNumber;
  }
  
  public function getBrand(): string    {
    return $this->brand;
  }
  
  public function getModel(): string    {
    return $this->model;
  }

  abstract public function getDetail():string;
}