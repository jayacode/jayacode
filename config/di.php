<?php
use Interop\Container\ContainerInterface;
use JayaCode\Framework\Core\Application\Application;
use JayaCode\Framework\Core\Http\Request;
use JayaCode\Framework\Core\Route;

return [
    Application::class => DI\object()
        ->constructorParameter("routeDispatcher", Route\dispatcherBasic(config("routes"))),
    
    Request::class => DI\factory([Request::class, 'createFromSymfonyGlobal']),
];
