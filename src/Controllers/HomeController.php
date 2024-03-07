<?php

namespace App\Controllers;

class HomeController
{
    public function index(): void
    {
        include_once APP_PATH . '/client/pages/home.php';
    }
}