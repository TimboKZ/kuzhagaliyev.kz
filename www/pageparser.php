<?php
include 'includes/php/settings.php';

$debug = false;

if($_GET['url'] == null && !$debug) {
    header('Location: '.$GLOBALS['base_url']);
}

$url = $debug ? $GLOBALS['base_url'] : $_GET['url'];
$result = 0;
$title = 'kuzhagaliyev.kz';
$html = null;

function loadPage($path) {
    ob_start();
    include $path;
    return ob_get_clean();
}

if(substr($url, 0, strlen($GLOBALS['base_url'])) === $GLOBALS['base_url']) {
    $url = substr($url, strlen($GLOBALS['base_url']), strlen($url));
    if(preg_match('/^[a-z0-9\/\-_]+\/\z/i', $url)) {
        $url = substr($url, 0, strlen($url) - 1);
        $parts = explode('/', $url);
        if(count($parts) == 1) {
            $page = DB::queryFirstRow('SELECT * FROM items WHERE slug = %s', $parts[0]);
            if(count($page) != 0) {
                $url = $GLOBALS['base_url'].$page['slug'].'/';
                $title = $page['name'].' | '.$title;
                if($page['category'] == 3) {
                    $GLOBALS['slug'] = $page['slug'];
                    $html = loadPage($GLOBALS['pages_base'].'reddit-themes.php');
                } else {
                    $path = $GLOBALS['pages_base'].$page['slug'].'/index.php';
                    if(file_exists($path)) {
                        $html = loadPage($path);
                    } else {
                        $result = 404;
                    }
                }
            } else {
                $result = 404;
            }
        } elseif(count($parts) == 2) {

        } else {
            $result = 400;
        }
    } elseif($url == '') {
        $html = loadPage($GLOBALS['pages_base'].'index.php');
        $url = $GLOBALS['base_url'];
    } else {
        $result = 400;
    }
} else {
    $result = 400;
}

$json = array(
    'result' => $result,
    'url' => $url,
    'title' => $title,
    'html' => $html
);

header('Content-Type: application/json');
echo json_encode($json);
