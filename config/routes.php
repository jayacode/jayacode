<?php
use App\Controller\HomeController;
use JayaCode\Framework\Core\Route\Collector\RouteCollector;
use JayaCode\Framework\Core\Route\Route;

return function(RouteCollector $route) {
    $route->addRoute(Route::get("home", "/", ["controller" => HomeController::class, "method" => "index"]));

    $route->addRoute(Route::get("about", "about", function() {
        return "Hello JayaCode";
    }));
};
