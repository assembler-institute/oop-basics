<?php

require_once('classGame.php');
require_once('items/classPlayerBag.php');
require_once('items/classSmartphone.php');
require_once('characters/classPlayer.php');

$phone = new Smartphone(['doctor' => '765-876']);
$bag = new PlayerBag(10, $phone, ['Pikachu']);
$player = new Player('Ash', $bag);
$game = new Game($player);