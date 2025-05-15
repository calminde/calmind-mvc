<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use FastRoute\RouteCollector;

return function(RouteCollector $r) {
    $r->addRoute('GET', '/', [HomeController::class, 'index']);
    $r->addRoute('GET', '/login', [LoginController::class, 'index']);
    
};