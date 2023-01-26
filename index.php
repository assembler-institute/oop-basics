<?php
require_once('config.php');
require_once(SITE_ROOT . '/src/controllers/getInstance.php');
require_once(SITE_ROOT . '/src/models/items/classPlayerBag.php');
require_once(SITE_ROOT . '/src/models/items/classSmartphone.php');
require_once(SITE_ROOT . '/src/models/fight/classGame.php');
require_once(SITE_ROOT . '/src/models/characters/classPlayer.php');

$game = getInstance();

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$gamePokemon = $game->getUser()->getLastPokemon();
$gameSmartphone = $game->getUser()->getItems()->getSmartphone();

include(SITE_ROOT . '/src/views/header.php');
echo "<div class='container'><h1 class='text-center'>Created Game</h1>";
$game->toString();

echo '<h1 class="text-center">Game Fight</h1>';
$game->fight();

echo '<h1 class="text-center">User Talk</h1>';
$game->getUser()->talk();

echo '<h1 class="text-center">Smartphone Call</h1>';
$gameSmartphone->call('doctor');

echo '<h1 class="text-center yellow">STATIC Smartphone Call</h1>';
$gameSmartphone->call('');
echo '<h3 class="ms-0">Changing Default PUBLIC Number</h3>';
Smartphone::$defaultCall = 'brock';
echo '<h1 class="text-center yellow">STATIC Smartphone Call</h1>';
$gameSmartphone->call('');

echo '<h1 class="text-center">Pokemon Attack</h1>';
$gamePokemon->attack('discharge');

echo '<h1 class="text-center yellow">STATIC Pokemon Attack</h1>';
$gamePokemon->attack('');
echo '<h3 class="ms-0">Changing Default PRIVATE Attack</h3>';
$gamePokemon->setDefaultMove('spark');
echo '<h1 class="text-center yellow">STATIC Pokemon Attack</h1>';
$gamePokemon->attack('');

echo '<h1 class="text-center">Pokemon Attack With Damage</h1>';
$attackGame1 = $gamePokemon->getAttack();
$result = $gamePokemon->getAttack()->calcDamage($attackGame1);
if ($result == 1)
  echo '<h2>Attack Success</h2>';

echo '<h1 class="text-center">Machine Complaining</h1>';
$game->getMachine()->complain();
echo '</h1>';
echo '</div>';