<?php

$GLOBALS['base_url'] = 'http://kuzhagaliyev.kz/';

$GLOBALS['mysql_user'] = 'root';
$GLOBALS['mysql_password'] = '';
$GLOBALS['mysql_db'] = 'kuzhagaliyev';
$GLOBALS['mysql_table'] = 'kuzhagaliyev';

require_once 'meekrodb.2.3.class.php';
DB::$user = $GLOBALS['mysql_user'];
DB::$password = $GLOBALS['mysql_password'];
DB::$dbName = $GLOBALS['mysql_db'];
//DB::debugMode();

?>