<?php

require_once ('classCharacters.php');
require_once('../items/classPlayerBag.php');
require_once('../pokemon/classPlayerPokemon.php');

final class Player extends Character {

    private PlayerBag $items;
    private PlayerPokemon $ultimoPokemon;
    private int $cartera;

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VARIABLES

    function __construct(String $nombre, PlayerBag $items) {
        parent::__construct($nombre);
        $this->items = $items;
        $this->cartera = 100;
    }
}