<?php

namespace App\Controllers;

class HomeController
{
    public function index(): void
    {
        include_once APP_PATH . '/src/client/pages/home.php';
    }
}