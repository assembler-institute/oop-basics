<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/characters/traitWildPlayer.php');
require_once(SITE_ROOT . '/src/models/pokemon/traitWildPokemon.php');

class WildPokemon
{
  use tWildPokemon {
    tWildPokemon::__construct as private wPokemon__construct;
  }
  use tWildPlayer {
    tWildPlayer::__construct as private wPlayer__construct;
  }
  private string $place;

  function __construct($name, int $life, SimpleAttack $attack, array $moves, string $place)
  {
    $this->wPokemon__construct($life, $attack, $moves);
    $this->wPlayer__construct($name);
    $this->place = $place;
  }

  public function setDefaultMove(string $move): void
  {
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

    public function getLevel(): int
  {
    return $this->level;
    ;
  }

  public function setLevel(int $level): void
  {
    $this->level = $level;
  }

  public function getLife(): int
  {
    return $this->life;
  }

  public function setLife(int $life): void
  {
    $this->life = $life;
  }

  function getAttack(): SimpleAttack
  {
    return $this->attack;
  }
}