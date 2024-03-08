<?php

namespace App\Controllers;

use App\Core\Controller\Controller;
use App\Core\Validator\Validator;

class UserController extends Controller
{
    public function add(): void
    {
        $this->view('admin/users/add');
    }
    
    public function store(): void
    {
        $data = ['name' => ''];
        $rules = ['name' => ['required', 'min:3', 'max:255']];

        $validator = new Validator();

        dd($validator->validate($data, $rules));

        dd($this->request()->input('name'));
    }
}