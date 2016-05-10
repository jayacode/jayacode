<?php
require_once(__DIR__.'/../vendor/autoload.php');


/**
 * Load all routes
 */
$routes = require_once("/../config/routes.php");

/**
 * define app dir
 */
define("__APP_DIR__", dirname(__FILE__). "/..");

$app = \JayaCode\Framework\Core\Application\Application::create();
$app->setListRoute($routes);

$app->run();
