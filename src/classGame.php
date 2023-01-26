<?php
require_once('../config.php');
require_once(SITE_ROOT . '/src/characters/classPlayer.php');
require_once(SITE_ROOT . '/src/characters/classMachine.php');
require_once(SITE_ROOT . '/src/classMainHistory.php');

final class Game
{
  private Player $user;
  private Machine $machine;

  function __construct(Player $player, Machine $machine)
  {
    $this->user = $player;
    $this->machine = $machine;
  }

  function getUser(): Player
  {
    return $this->user;
  }
  function getMachine(): Machine
  {
    return $this->machine;
  }

  function fight()
  {
    echo '<b>' . $this->user->getName() . "</b> is fighting!";
  }

  function toString(): void
  {
    $this->user->toString();
    $this->machine->toString();
  }
}

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
  $meow = new EnemyPokemon('Meow', 300, new SimpleAttack('blow up', 10), [
    'hit' => 20
  ]);
  $bag = new PlayerBag(10, $phone);
  $player = new Player('Ash', $bag);
  $machine = new Machine('Rocket', $meow);
  $player->setLastPokemon($pika);
  return new Game($player, $machine);
}