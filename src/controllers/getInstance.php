<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/characters/classPlayer.php');
require_once(SITE_ROOT . '/src/models/characters/classMachine.php');
require_once(SITE_ROOT . '/src/controllers/classMainHistory.php');

function getInstance(): Game
{
  $phone = new Smartphone([
    'doctor' => '765-876',
    'mum' => '734-656',
    'brock' => '554-891',
    'misty' => '324-875'
  ]);
  $pika = new PlayerPokemon('Pikachu', 500, 200, new SimpleAttack('thunder', 50), [
    'thunderbolt' => 100,
    'discharge' => 60,
    'iron Trail' => 30,
    'spark' => 80
  ]);
  $meow = new EnemyPokemon('Meowth', 300, new SimpleAttack('blow up', 10), [
    'hit' => 20
  ]);
  $bag = new PlayerBag(10, $phone);
  $player = new Player('Ash', $bag);
  $machine = new Machine('Rocket', $meow);
  $player->setLastPokemon($pika);
  return new Game($player, $machine);
}