<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/characters/classPlayer.php');
require_once(SITE_ROOT . '/src/models/characters/classMachine.php');
require_once(SITE_ROOT . '/src/controllers/classMainHistory.php');

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