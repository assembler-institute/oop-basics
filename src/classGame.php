<?php

require_once('characters/classPlayer.php');
require_once('classMainHistory.php');

final class Game {
    private Player $user;
    private MainHistory $history;

    ////////////////////////////////////////////////////////////////////////////////////////////VARIABLES

    function __construct(Player $player) {
        $this->user = $player;
    }
}