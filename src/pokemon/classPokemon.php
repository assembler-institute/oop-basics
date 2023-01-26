<?php

abstract class Pokemon
{

  protected string $name;
  protected int $level;
  protected int $life;

  public function __construct(string $name, int $life)
  {
    $this->name = $name;
    $this->life = $life;
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
}