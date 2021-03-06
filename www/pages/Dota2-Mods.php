<?php

$name = $GLOBALS['page']['name'];
$versions = null;
$description = 'A set of icons.';
$download = null;

if($GLOBALS['page']['slug'] == 'Kunkka-Custom-Icons') {
    $name = $GLOBALS['page']['name'];
    $versions = array(
        array(
            'version' => '0.1',
            'link' => 'http://www.mediafire.com/download/2tidv112aauot3y/Kunkka-Custom-Icons-0.1.zip',
        ),
    );
    $description = 'A set of customised icons for Kunkka\'s spells. Made with soul, enjoy :D'.PHP_EOL.'Kunkka art by Mike Azevedo.';
} elseif($GLOBALS['page']['slug'] == 'Lanaya-Custom-Icons') {
    $name = $GLOBALS['page']['name'];
    $versions = array(
        array(
            'version' => '0.1',
            'link' => 'http://www.mediafire.com/download/b4p935o7n5dvy43/Lanaya_Custom_Icons_0.1.zip',
        ),
    );
    $description = 'A set of customised icons for Templar Assassin\'s spells.';
} elseif($GLOBALS['page']['slug'] == 'PotM-Custom-Icons') {
    $name = 'Princess of the Moon Custom Icons';
    $versions = array(
        array(
            'version' => '0.1',
            'link' => 'http://www.mediafire.com/download/545g3122gm7bgrw/PotM_Custom_Icons_0.1.zip',
        ),
    );
    $description = 'A set of customised icons for Mirana\'s spells.';
} elseif($GLOBALS['page']['slug'] == 'Pugna-Custom-Icons') {
    $name = 'Pugna Custom Icons';
    $versions = array(
        array(
            'version' => '0.1',
            'link' => 'http://www.mediafire.com/download/rcf6vuzx0d7004v/Pugna_Custom_Icons_0.1.zip',
        ),
    );
    $description = 'A set of customised icons for Pugna\'s spells.';
} elseif($GLOBALS['page']['slug'] == 'Slark-Custom-Icons') {
    $name = 'Slark Custom Icons';
    $versions = array(
        array(
            'version' => '0.2',
            'link' => 'http://www.mediafire.com/download/xc6t1xdd43q58xj/Slark_Custom_Icons_0.2.zip',
        ),
        array(
            'version' => '0.1',
            'link' => 'http://www.mediafire.com/download/ec9rk3b46ih7xv8/Slark_Custom_Icons_0.1.zip',
        ),
    );
    $description = 'A set of customised icons for Slark\'s spells.';
}

$GLOBALS['dota2-icons'] = array(
    'name' => $name,
    'versions' => $versions,
    'description' => $description,
);

include 'templates/dota2-icons.php';