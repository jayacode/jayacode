<?php
use JayaCode\Framework\Core\Route\Route;

return [
    Route::get("home", "/", ["controller" => "HomeController", "method" => "index"]),

    Route::get("about", "about", function () {
        return "Hello JayaCode";
    })

];
