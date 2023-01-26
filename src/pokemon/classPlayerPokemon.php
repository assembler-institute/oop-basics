<?php
require_once('classPokemon.php');
require_once('../fight/classSimpleAttack.php');
final class PlayerPokemon extends Pokemon
{
  private int $experience;
  private SimpleAttack $attack;
  private array $moves;

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// VARIABLES

  // CONSTRUCTOR POKEMON
  public function __construct(string $name, int $life, int $experience, SimpleAttack $attack, array $moves)
  {
    parent::__construct($name, $life);
    $this->experience = $experience;
    $this->attack = $attack;
    $this->moves = $moves;
    switch ($experience) {
      case 0:
        parent::setLevel(0);
        break;
      case 100:
        parent::setLevel(1);
        break;
      case 200:
        parent::setLevel(2);
        break;
      case 300:
        parent::setLevel(3);
        break;
      case 400:
        parent::setLevel(4);
        break;
      case 500:
        parent::setLevel(5);
        break;
      case 600:
        parent::setLevel(6);
        break;
      case 700:
        parent::setLevel(7);
        break;
      case 800:
        parent::setLevel(8);
        break;
      case 900:
        parent::setLevel(9);
        break;
      case 1000:
        parent::setLevel(10);
        break;
    }
  }

}