<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $adminModel = new AdminModel();

        $data['admin'] = $adminModel->orderBy('id_admin', 'DESC')->findAll();
        return view('admin/admin_data', $data);
    }

    public function create()
    {
        return view('admin/admin_create');
    }

    /**
     * store function
     */
    public function store()
    {           
        //define validation
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
            session()->setFlashdata('message', 'Admin Berhasil Disimpan');
            return redirect()->to(base_url('admin'));
        } else {
            return view('admin/admin_create', [
                'validation' => $this->validator
            ]);
        }
    }

    public function edit($id)
    {
        //model initialize
        $adminModel = new AdminModel();

        $data = array(
            'admin' => $adminModel->find($id)
        );

        return view('admin/admin_edit', $data);
    }

    /**
     * update function
     */
    public function update($id)
    {                   
        //define validation
        $rules = [
            'username' => 'required|min_length[4]|max_length[100]|is_unique[admin.username]',
            'password' => 'required|min_length[4]|max_length[50]',
            'konfirm_password' => 'required|matches[password]'
        ];

        if (!$this->validate($rules)) {

            //model initialize
            $adminModel = new AdminModel();

            //render view with error validation message
            return view('admin/admin_edit', [
                'admin' => $adminModel->find($id),
                'validation' => $this->validator
            ]);

        } else {            
            // $session = session();
            // if ($id == $session->get('id_admin')) {
            //     $ses_data = [
            //         'username' => $this->request->getVar('username')
            //     ];
            //     $session->set($ses_data);
            // }
            //model initialize
            $adminModel = new AdminModel();
            
            //insert data into database
            $adminModel->update($id, [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);

            //flash message
            session()->setFlashdata('message', 'Admin Berhasil Diupdate');

            return redirect()->to(base_url('admin'));
        }
    }

    /**
     * delete function
     */
    public function delete($id)
    {
        //model initialize
        $adminModel = new AdminModel();

        $admin = $adminModel->find($id);

        if($admin) {
            $adminModel->delete($id);

            //flash message
            session()->setFlashdata('message', 'Admin Berhasil Dihapus');

            return redirect()->to(base_url('admin'));
        }
    }

    public function status($id)
    {
        $adminModel = new AdminModel();

        $data = $adminModel->where('id_admin', $id)->first();

        if ($data['status'] == 0) {
            $status = 1;
        } else {
            $status = 0;
        }

        $adminModel->update($id, [
            'status' => $status
        ]);

        //flash message
        session()->setFlashdata('message', 'Admin Berhasil Diupdate');

        return redirect()->to(base_url('admin'));
    }
}