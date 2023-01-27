<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/characters/classCharacter.php');



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
    echo "Name - <strong>" . $this->name . '</strong><br>' . '<br>';
    echo $this->lastPokemon->toString() . '</strong><br>';
  }
}