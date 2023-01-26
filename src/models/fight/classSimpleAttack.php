<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/fight/interfaceDamage.php');

final class SimpleAttack implements CauseDamage 
{
  private string $name;
  private int $damage;

  function __construct(string $name, int $damage)
  {
    $this->name = $name;
    $this->damage = $damage;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getDamage(): int
  {
    return $this->damage;
  }

  public function setDamage(int $damage): void
  {
    $this->damage = $damage;
  }

	public function calcDamage(SimpleAttack $move): int {
    echo "Attacked with . . . <b>" . $move->getName() . '</b> with damage of . . . <b>' . $this->damage . '</b><br>';
    return 1;
	}

  function toString(): void
  {
    echo "Name - <b>" . ucfirst($this->name) . '</b><br>' .
    "Damage - <b>" . $this->damage . ' power</b><br>';
  }
}