<?php
use JayaCode\Framework\Core\Route\Route;

return [
    Route::get("home", "/", "index", "HomeController"),

    Route::get("home", "about", function () {
        return "Hello JayaCode";
    })
];
