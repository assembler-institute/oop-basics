<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/characters/classCharacter.php');


final class Player extends Character
{

  private PlayerBag $items;
  private PlayerPokemon $lastPokemon;
  private int $money;

  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VARIABLES

  function __construct(string $name, PlayerBag $items)
  {
    parent::__construct($name);
    $this->items = $items;
    $this->money = 100;
  }

  function getItems(): PlayerBag
  {
    return $this->items;
  }

  function setItems(PlayerBag $items): void
  {
    $this->items = $items;
  }
  function getLastPokemon(): PlayerPokemon
  {
    return $this->lastPokemon;
  }

  function setLastPokemon(PlayerPokemon $pokemon): void
  {
    $this->lastPokemon = $pokemon;
  }
  function getMoney(): int
  {
    return $this->money;
  }

  function setMoney(int $money): void
  {
    $this->money = $money;
  }

  function talk()
  {
    echo '<b>' . $this->name . '</b> is talking . . .  and his pokemon is . . . <b>' . $this->lastPokemon->getName() . '</b>';
  }
  function toString(): void
  {
    setContainerWithImage('green', 'Player', 'player');
    echo parent::toString() .
      "Money - <strong>" . $this->money . '$</strong><br>';
    setContainerWithImage('green', 'Items', 'bag');
    echo $this->items->toString();
    echo $this->lastPokemon->toString() . '</strong><br>';
  }
}