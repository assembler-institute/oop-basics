<?php

interface CauseDamage
{
  function calcDamage(SimpleAttack $move): int;
}