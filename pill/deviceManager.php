<?php

require_once 'device.php';
require_once 'repository.php';

class DeviceManager {
  public function getDeviceSerialNumber(Device $device) {
    return $device->getSerialNo();
  }
  public function addDevice(DeviceRepository $repository, Device $device)
  {
     $repository->create($device);
  }
}



