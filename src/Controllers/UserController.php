<?php

namespace App\Controllers;

use App\Core\Controller\Controller;

class UserController extends Controller
{
    public function add(): void
    {
        $this->view('admin/users/add');
    }
    
    public function store(): void
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50']
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }
            $this->redirect('/admin/users/add');
        }

        $id = $this->db()->insert('users', [
            'name' => $this->request()->input('name')
        ]);

        dd("User added successfully with id: $id");
    }
}