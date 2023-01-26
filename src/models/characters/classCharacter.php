<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/items/classPlayerBag.php');
require_once(SITE_ROOT . '/src/models/pokemon/classPlayerPokemon.php');
require_once(SITE_ROOT . '/src/models/pokemon/classEnemyPokemon.php');
require_once(SITE_ROOT . '/src/views/containerImg.php');

class Character
{

  protected $name;

  function __construct(string $name)
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  function talk()
  {
    echo $this->name . ' is talking . . .';
  }

  function toString(): void
  {
    echo "Name - <strong>" . $this->name . '</strong><br>';
  }
}