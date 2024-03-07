<?php

namespace App\Controllers;

class LoginController
{
    public function index(): void
    {
        include_once APP_PATH . '/client/pages/login.php';
    }
}
