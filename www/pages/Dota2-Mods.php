<?php

$name = $GLOBALS['page']['name'];
$version = 'v0.1';
$description = 'A set of icons.';
$download = null;

if($GLOBALS['page']['slug'] == 'Lanaya-Custom-Icons') {
    $name = $GLOBALS['page']['name'];
    $version = 'v0.1';
    $description = 'A set of customised icons for Templar Assassin\'s spells.';
    $download = 'http://www.mediafire.com/download/b4p935o7n5dvy43/Lanaya_Custom_Icons_0.1.zip';
} elseif($GLOBALS['page']['slug'] == 'PotM-Custom-Icons') {
    $name = 'Princess of the Moon Custom Icons';
    $version = 'v0.1';
    $description = 'A set of customised icons for Mirana\'s spells.';
    $download = 'http://www.mediafire.com/download/545g3122gm7bgrw/PotM_Custom_Icons_0.1.zip';
}

$GLOBALS['dota2-icons'] = array(
    'name' => $name,
    'version' => $version,
    'description' => $description,
    'download' => $download,
);

include 'templates/dota2-icons.php';