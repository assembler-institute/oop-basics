<?php

trait tWildPokemon
{
  protected int $level;
  protected int $life;

  protected SimpleAttack $attack;
  protected array $moves;

  public function __construct(int $life, SimpleAttack $attack, array $moves)
  {
    $this->life = $life;
    $this->attack = $attack;
    $this->moves = $moves;
    $this->level = 0;
  }

  function attack(string $move): void
  {
    echo "Attacking with move . . . <b>" . $move . '</b>';
  }
}