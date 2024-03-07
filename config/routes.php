<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Core\Router\Route;

return [
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/login', [LoginController::class, 'index']),
    Route::get('/test', function () {
        echo 'test';
    })
];
