<?php
use JayaCode\Framework\Core\Application\Application;

require_once(__DIR__.'/../vendor/autoload.php');

$app = new Application();

$app->initConfigDir(dirname(__FILE__). "/..");
$app->setListRoute((array) config("routes"));

$app->run();
