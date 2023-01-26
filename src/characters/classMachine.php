<?php
require_once('../config.php');
require_once(SITE_ROOT . '/src/characters/classCharacter.php');
require_once(SITE_ROOT . '/src/items/classPlayerBag.php');
require_once(SITE_ROOT . '/src/pokemon/classEnemyPokemon.php');
require_once(SITE_ROOT . '/src/views/containerImg.php');


final class Machine extends Character
{

  private EnemyPokemon $lastPokemon;

  function __construct(string $name, EnemyPokemon $lastPokemon)
  {
    parent::__construct($name);
    $this->lastPokemon = $lastPokemon;
  }


  function getLastPokemon(): EnemyPokemon
  {
    return $this->lastPokemon;
  }

  function setLastPokemon(EnemyPokemon $pokemon): void
  {
    $this->lastPokemon = $pokemon;
  }

  function complain()
  {
    echo '<b>' . $this->name . '</b> is comlaining himself . . .  and his pokemon is . . . <b>' . $this->lastPokemon->getName() . '</b>';
  }
  function toString(): void
  {
    setContainerWithImage('green', 'Machine', 'machine');
    echo parent::toString() . '<br>';
    echo $this->lastPokemon->toString() . '</strong><br>';
  }
}