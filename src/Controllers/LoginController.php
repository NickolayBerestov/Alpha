<?php

namespace App\Controllers;

use App\Core\Controller\Controller;

class LoginController extends Controller
{
    public function index(): void
    {
        $this->view('login');
    }
}
