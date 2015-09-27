<?php

// Set up default content-type
header('Content-Type: application/json; charset=utf-8');

// The composer vendor dir; no trailling slash
define('VENDOR_DIR', getenv('VENDOR_DIR') ?: __DIR__ . '/../vendor');

// Define path to application directory; no trailling slash
define('APPLICATION_PATH', __DIR__ . '/../application');

// Path to /public; no trailling slash
define('PUBLIC_PATH', __DIR__);

// Application env
define('APPLICATION_ENV', getenv('APPLICATION_ENV') ?: 'development');

// Zend_Application; comment the next line if you load ZF with composer
require_once 'Zend/Application.php';

// Composer autoloader
require_once VENDOR_DIR . '/autoload.php';

// Create and run the application…
Benri_Application
    ::createInstance(APPLICATION_ENV, APPLICATION_PATH . '/configs/app.json')
    ->bootstrap()
    ->run();
