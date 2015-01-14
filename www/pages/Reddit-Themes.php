<?php

$text = '<img src="'.$GLOBALS['base_url'].'images/'.$GLOBALS['category']['slug'].'/'.$GLOBALS['page']['slug'].'-preview.png">'.PHP_EOL;
$text .= '<p>'.$GLOBALS['page']['name'].' reddit theme, <a href="http://reddit.com/r/'.$GLOBALS['page']['slug'].'" target="_blank">http://reddit.com/r/'.$GLOBALS['page']['slug'].'</a></p>';

$GLOBALS['article'] = array(
    'text' => $text,
);

include 'templates/article.php';