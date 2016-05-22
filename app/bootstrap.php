<?php
use DI\ContainerBuilder;
use JayaCode\Framework\Core\Helper\Config\Config;

require __DIR__ . '/../vendor/autoload.php';
require 'define.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . '/../config/di.php');
$container = $containerBuilder->build();
return $container;
