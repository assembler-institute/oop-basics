<?php
require_once(SITE_ROOT . '/src/pokemon/classPokemon.php');
require_once(SITE_ROOT . '/src/fight/classSimpleAttack.php');
require_once(SITE_ROOT . '/src/views/containerImg.php');

final class EnemyPokemon extends Pokemon
{
  private int $experience;

  private static $defaultMove = 'thunderbolt';


  public function __construct(string $name, int $life, SimpleAttack $attack, array $moves)
  {
    parent::__construct($name, $life, $attack, $moves);
    $this->experience = 100;
    $this->level = 1;
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
        setContainerWithImage('green', 'Pokemon', 'meowth');
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