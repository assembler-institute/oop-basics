<?php

interface DeviceRepository{
  public function create(Device $device);
  public function findById(string $deviceId): Device;
}

class MemoryRepository implements DeviceRepository{
  private $devices;
  public function __construct()
  {
      $this->devices = [];
  }
  public function create(Device $device)
  {
      array_push($this->devices, $device);
  }
  public function findById(string $deviceId): Device    {
      foreach ($this->devices as $device) {
          if ($deviceId === $device->getId()) return $device;
      }
      return null;
  }
}

