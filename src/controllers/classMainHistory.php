<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/history/interfaceHistory.php');

class MainHistory implements History
{

  public function pokemonDoctorPresent(Player $user)
  {
    echo "Doctor offers you a present  . . .  Is your new Pokemon!!!";
  }

  public function fightWildPokemon(Player $user, Game $game)
  {
    echo "You find with a wild pokemon . . .  Fight!!!";
  }

  public function fightTeamRocket(Player $user, Game $game)
  {
    echo "You find with the team rocket . . .  Fight!!!";
  }

  public function coachesTournament(Player $user, Game $game)
  {
    echo "You have to fight in the most important tournament of the city!";
  }
}