<?php
use JayaCode\Framework\Core\Application\Application;

$container = require __DIR__ . '/../app/bootstrap.php';

/** @var Application $app */
$app = $container->get(Application::class);

$app->run();
