<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/pokemon/classPokemon.php');

final class PlayerPokemon extends Pokemon
{
  private int $experience;

  private static $defaultMove = 'thunderbolt';


  public function __construct(string $name, int $life, int $experience, SimpleAttack $attack, array $moves)
  {
    parent::__construct($name, $life, $attack, $moves);
    $this->experience = $experience;
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

  function setDefaultMove(string $move): void
  {
    self::$defaultMove = $move;
  }

  function attack(string $move): void
  {
    if (!$move)
      $move = self::$defaultMove;
    echo '<b>' . $this->name . "</b> set upon with <b>" . $move . "</b> move and the damage is <b>" . $this->moves[$move] . "</b>";
  }

  function toString(): void
  {
    setContainerWithImage('green', 'Pokemon', 'pika');
    echo "Name - <b>" . $this->name . '</b><br>';
    echo "Level - <b>" . $this->level . '</b><br>';
    echo "Life - <b>" . $this->life . '</b><br>';
    echo "Experience - <b>" . $this->experience . '</b><br>';

    echo "<h2>Simple Attack</h2>";
    echo $this->attack->toString() . '<br>';
    echo "<h2>Moves</h2><b><pre>";
    print_r($this->moves);
    echo '</pre></b>';
  }
}