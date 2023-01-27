<?php

trait tWildPlayer
{

  protected $name;

  function __construct(string $name)
  {
    $this->name = $name;
  }
}