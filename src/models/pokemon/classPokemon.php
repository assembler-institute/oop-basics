<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/fight/classSimpleAttack.php');
require_once(SITE_ROOT . '/src/views/containerImg.php');

abstract class Pokemon
{

  protected string $name;
  protected int $level;
  protected int $life;

  protected SimpleAttack $attack;
  protected array $moves;

  public function __construct(string $name, int $life, SimpleAttack $attack, array $moves)
  {
    $this->name = $name;
    $this->life = $life;
    $this->attack = $attack;
    $this->moves = $moves;
    $this->level = 0;
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

  abstract function attack(string $move): void;
  abstract function setDefaultMove(string $move): void;

  function toString(): void
  {
    echo $this->name . '<br>' .
      $this->life . '<br>' .
      $this->level . '<br>';
  }
}

