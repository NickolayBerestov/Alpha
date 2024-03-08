<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\UserController;
use App\Core\Router\Route;

return [
    Route::get('/', [HomeController::class, 'index']),
    Route::get('/login', [LoginController::class, 'index']),
    Route::get('/admin/users/add', [UserController::class, 'add']),
    Route::post('/admin/users/add', [UserController::class, 'store']),
    Route::get('/test', function () {
        echo 'test';
    })
];
