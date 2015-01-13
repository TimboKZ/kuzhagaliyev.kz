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
            $GLOBALS['page'] = $page;
            if(count($page) != 0) {
                $url = $GLOBALS['base_url'].$page['slug'].'/';
                $title = $page['name'].' | '.$title;
                $category = DB::queryOneRow('SELECT * FROM categories WHERE id = %i', $page['category']);;
                $GLOBALS['category'] = $category;
                $paths = array(
                    $GLOBALS['pages_base'].$category['slug'].'/'.$page['slug'].'/index.php',
                    $GLOBALS['pages_base'].$category['slug'].'/'.$page['slug'].'.php',
                    $GLOBALS['pages_base'].$category['slug'].'/index.php',
                    $GLOBALS['pages_base'].$category['slug'].'.php'
                );
                $notfound = true;
                foreach($paths as $path) {
                    if(file_exists($path)) {
                        $html = loadPage($path);
                        $notfound = false;
                    }
                }
                if($notfound) {
                    $result = 404;
                }
            } else {
                $result = 404;
            }
        } elseif(count($parts) == 2) {
            // Section parsing goes here
            $result = 400;
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
