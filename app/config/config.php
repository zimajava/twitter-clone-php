<?php
    ob_start();
    session_start();

// DB Params
    $url = parse_url(getenv('CLEARDB_TEAL_URL'));
//    $url2 = parse_url('mysql://b8d74e356cd88c:2adf3688@us-cdbr-iron-east-04.cleardb.net/heroku_85276c5d0e97083?reconnect=true');
    $host = $url['host'] ?? 'localhost';
    $username = $url['user'] ?? 'test';
    $password = $url['pass'] ?? 'test';
    $db = substr($url['path'], 1);
    $database = strlen($db) ? $db : 'twitter';

//    $host2 = $url2['host'] ?? 'localhost';
//    $username2 = $url2['user'] ?? 'test';
//    $password2 = $url2['pass'] ?? 'test';
//    $db2 = substr($url2['path'], 1);
//    $database2 = strlen($db2) ? $db2 : 'twitter';
//
//        echo '<pre>';
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
//    heroku addons:create cleardb:ignite --fork=mysql://test:test@localhost/twitter
//    heroku addons:create jawsdb:kitefin --fork=mysql://test:test@localhost/twitter
