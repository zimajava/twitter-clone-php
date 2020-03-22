<?php 
ob_start();
session_start();

// DB Params
//define('DB_HOST', 'localhost');
//define('DB_USER', 'test');
//define('DB_PASS', 'test');
//define('DB_NAME', 'twitter');

    $url = parse_url(getenv('CLEARDB_DATABASE_URL'));
    $host = $url['host'] ?? 'localhost';
    $username = $url['user'] ?? 'test';
    $password = $url['pass'] ?? 'test';
    $db = substr($url['path'], 1);
    $database = strlen($db) > 0 ? $db : 'twitter';
//    echo '<pre>';
//    print_r($host);
//    echo '</br>';
//    print_r($username);
//    echo '</br>';
//    print_r($password);
//    echo '</br>';
//    print_r($database);
//    echo '</pre>';
    define('DB_HOST', $host);
    define('DB_USER', $username);
    define('DB_PASS', $password);
    define('DB_NAME', $database);

// App Root 
define('APPROOT', dirname(__DIR__));
// URL Root
define('URLROOT', 'http://twitter.local:8888');
// Site Name
define('SITENAME', 'Twitter Clone');
