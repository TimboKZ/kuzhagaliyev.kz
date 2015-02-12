<?php
include_once 'includes/php/settings.php';

$experimentsPath = 'experiments/';

$page = $_GET['page'];

$experiment = DB::queryOneRow('SELECT * FROM items WHERE slug = %s AND section = 3', $page);

if($experiment) {
    $path = $experimentsPath.$experiment['slug'].'.php';
    if(file_exists($path)) {
        include $path;
    } else {
        include $experimentsPath.'404.php';
    }
} else {
    include $experimentsPath.'404.php';
}
