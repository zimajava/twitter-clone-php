<?php 
ob_start();
session_start();

// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'test');
define('DB_PASS', 'test');
define('DB_NAME', 'twitter');

// App Root 
define('APPROOT', dirname(__DIR__));
// URL Root
define('URLROOT', 'http://twitter.local:8888');
// Site Name
define('SITENAME', 'Twitter Clone');
