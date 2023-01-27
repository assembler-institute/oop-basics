<?php 
interface History {

   function pokemonDoctorPresent(Player $user);

   function fightWildPokemon (Player $user, game $game);

   function fightTeamRocket(Player $user, game $game);
   
   function coachesTournament (Player $user, game $game);
}