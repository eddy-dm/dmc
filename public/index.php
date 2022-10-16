<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('home', ['controller' => 'Home', 'action' => 'index']);
$router->add('contact', ['controller' => 'Contact', 'action' => 'index']);
$router->add('products', ['controller' => 'Products', 'action' => 'index']);
$router->add('terms_conditions', ['controller' => 'Contact', 'action' => 'index']);
$router->add('location', ['controller' => 'Location', 'action' => 'index']);

//$router->add('', ['controller' => 'Contact', 'action' => 'contact']);
// $router->add('', ['controller' => 'Products', 'action' => 'products']);

//$router->add('{controller}/{action}');
    


$router->dispatch($_SERVER['QUERY_STRING']);
