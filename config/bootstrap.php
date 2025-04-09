<?php
// Basic configuration and autoloading
require_once __DIR__.'/paths.php';
require_once __DIR__.'/database.php';
require_once ROOT_PATH.'app/Core/Router.php';

// Register routes
$GLOBALS['appRouter'] = new App\Core\Router();
$GLOBALS['appRouter']->addRoute('GET', '', 'HomeController', 'index');
$GLOBALS['appRouter']->addRoute('GET', 'home', 'HomeController', 'index');

// Autoload classes
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = ROOT_PATH . 'app/';
    
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    if (file_exists($file)) {
        require $file;
    }
});

// Start session
session_start();

// Initialize routes
$router = new \App\Core\Router();
$router->addRoute('GET', '', 'HomeController', 'index');
$router->addRoute('GET', 'home', 'HomeController', 'index');

// Make router available globally
$GLOBALS['router'] = $router;
