<?php

$name = $GLOBALS['page']['name'];
$version = 'v0.1';
$description = 'A set of icons.';

if($GLOBALS['page']['slug'] == 'Lanaya-Custom-Icons') {
    $name = $GLOBALS['page']['name'];
    $version = 'v0.1';
    $description = 'A set of customised icons for Templar Assassin\'s spells.';
} elseif($GLOBALS['page']['slug'] == 'PotM-Custom-Icons') {
    $name = 'Princess of the Moon Custom Icons';
    $version = 'v0.1';
    $description = 'A set of customised icons for Mirana\'s spells.';
}

$GLOBALS['dota2-icons'] = array(
    'name' => $name,
    'version' => $version,
    'description' => $description,
);

include 'templates/dota2-icons.php';