<?php

    // App Root
    define('APPROOT', __DIR__);
// URL Root
    define('URLROOT', 'http://twitter.local:8888');
// Site Name
    define('SITENAME', 'Twitter Clone');
// Load Config
    require_once APPROOT . '/config/config.php';
// Load Helpers
    require_once APPROOT . '/helpers/functions.php';
    require_once APPROOT . '/helpers/auth.php';
    require_once APPROOT . '/helpers/validation.php';

// Autoload Core Libraries
    spl_autoload_register(static function($className) {
        require_once APPROOT . '/libraries/'. $className .'.php';
    });
