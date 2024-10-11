<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Regis extends BaseController
{
    public function index()
    {
        $data = [];
        return view('auth/regis', $data);
    }

    public function store()
    {
        $rules = [
            'username' => 'required|min_length[4]|max_length[100]|is_unique[admin.username]',
            'password' => 'required|min_length[4]|max_length[50]',
            'konfirm_password' => 'required|matches[password]'
        ];
          
        if ($this->validate($rules)) {
            $adminModel = new AdminModel();
            $adminModel->insert([
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'status' => 1
            ]);
            return redirect()->to(base_url('login'));
        } else {
            $data['validation'] = $this->validator;
            return view('auth/regis', $data);
        }
          
    }
}
