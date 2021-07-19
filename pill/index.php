<?php

require_once 'deviceManager.php';
require_once 'device.php';
require_once 'mobile.php';
require_once 'tablet.php';

$iphone6 = new Mobile('M1', 'U7lhSos23Xjg5BNP', 'Apple', 'iPhone 6s', '499');
$iphone6Plus = new Mobile('M1plus', 'F9ihFid78Xju8FLW', 'Apple', 'iPhone 6 Plus', '550' );

$tablet = new Tablet('T1', '7PbcvqlP3fOWgpPe', 'Apple', 'iPad Pro',  '879');

$deviceManager = new DeviceManager();
$memoryRepository = new MemoryRepository();

$deviceManager->addDevice($memoryRepository, $iphone6);
$deviceManager->addDevice($memoryRepository, $iphone6Plus);
$deviceManager->addDevice($memoryRepository, $tablet);

echo "<h3>" .$iphone6->getModel() . "</h3>";
echo $memoryRepository->findById('M1')->getDetail();
echo '<br>';

echo "<h3>" .$iphone6Plus->getModel() . "</h3>";
echo $memoryRepository->findById('M1plus')->getDetail();
echo '<br>';

echo "<h3>" .$tablet->getModel() . "</h3>";
echo $memoryRepository->findById('T1')->getDetail();
echo '<br>';