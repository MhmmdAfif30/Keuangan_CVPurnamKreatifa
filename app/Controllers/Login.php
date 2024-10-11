<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
        return view('auth/login', $data);
    }

    public function loginAuth()
    {        
        $adminModel = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $data = $adminModel->where('username', $username)->first();
        
        if ($data) {
            $status = $data['status'];
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                if ($status == 1) {
                    // $session = session();
                    // $ses_data = [
                    //     'id_admin' => $data['id_admin'],
                    //     'username' => $data['username'],
                    //     'isLoggedIn' => TRUE
                    // ];
                    // $session->set($ses_data);
                    return redirect()->to(base_url());
                } else {
                    $session->setFlashdata('msg', 'Akun Dibanned.');
                    return redirect()->to(base_url('login'));
                }                                       
            } else {
                $session->setFlashdata('msg', 'Password Salah.');
                return redirect()->to(base_url('login'));
            }
        } else {
            setFlashdata('msg', 'Username Tidak Ada.');
            return redirect()->to(base_url('login'));
        }
    }
}
