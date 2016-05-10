<?php
return [
    [ "id" => "home", "path" => "/", "controller" => "HomeController", "action" => "index"],

    [ "id" => "about", "path" => "about", "action" => function () {
        return "hello world";
    }]
];
