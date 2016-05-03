<?php

define("__APP_DIR__", __DIR__ . "/..");

require_once(__DIR__ . '/../vendor/autoload.php');

$engine = \JayaCode\Framework\Core\Application\Application::create();

$engine->run();
