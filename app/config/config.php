<?php
    ob_start();
    session_start();

// DB Params
    $url = parse_url(getenv('CLEARDB_DATABASE_URL'));
    $host = $url['host'] ?? 'localhost';
    $username = $url['user'] ?? 'test';
    $password = $url['pass'] ?? 'test';
    $db = substr($url['path'], 1);
    $database = strlen($db) > 0 ? $db : 'twitter';
    define('DB_HOST', $host);
    define('DB_USER', $username);
    define('DB_PASS', $password);
    define('DB_NAME', $database);

    echo 'config';
