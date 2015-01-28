<?php

$github = null;
$preview = null;
$description = null;

if($GLOBALS['page']['slug'] == 'Active-Visualiser') {
    $github = 'https://github.com/TimboKZ/ActiveVisualiser';
    $preview = 'OUPmbOWXMtE';
    $description = 'A music visualiser written on Java (utilising Beads, LWJGL and Slick). I made a better version, check out <a href="http://kuzhagaliyev.kz/Envision/" class="load-page">Envision</a>.';
}
if($GLOBALS['page']['slug'] == 'Envision') {
    $github = 'https://github.com/TimboKZ/Envision';
    //$preview = 'OUPmbOWXMtE';
    $description = 'An advanced music visualiser/player written on Java.';
}

$GLOBALS['data'] = array(
    'github' => $github,
    'preview' => $preview,
    'description' => $description,
);

include 'templates/java-app.php';;
