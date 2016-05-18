<?php
use JayaCode\Framework\Core\Application\Application;
use JayaCode\Framework\Core\Helper\Config\Config;

require_once(__DIR__.'/../vendor/autoload.php');

Application::initConfigDir(dirname(__FILE__)."/..");

$app = new Application();

$app->setDataRoute(Config::load("routes.php"));

$app->run();
