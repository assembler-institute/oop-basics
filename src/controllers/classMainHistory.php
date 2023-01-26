<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/php-oop-basics/config.php');
require_once(SITE_ROOT . '/src/models/history/interfaceHistory.php');

class MainHistory implements History{

	public function pokemonDoctorPresent(Player $user) {
	}

	public function fightWildPokemon(Player $user, Game $game) {
	}

	public function fightTeamRocket(Player $user, Game $game) {
	}
	
	public function coachesTournament(Player $user, Game $game) {
	}
}