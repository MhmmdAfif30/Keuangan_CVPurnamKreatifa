<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SubKlasifikasiModel;

class SubKlasifikasi extends BaseController
{
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $subKlasifikasiModel = new SubKlasifikasiModel();

        $data['sub_klasifikasi'] = $subKlasifikasiModel->orderBy('id_sub_klasifikasi', 'DESC')->findAll();
        return view('sub_klasifikasi/sub_klasifikasi_data', $data);
    }

    public function create()
    {
        return view('sub_klasifikasi/sub_klasifikasi_create');
    }

    /**
     * store function
     */
    public function store()
    {           
        //define validation
        $validation = $this->validate([
            'nama_sub_klasifikasi' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Sub Klasifikasi.'
                ]
            ],
            'kode_sub_klasifikasi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kode Sub Klasifikasi.'
                ]
            ],            
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('sub_klasifikasi/sub_klasifikasi_create', [
                'validation' => $this->validator
            ]);

        } else {

             //model initialize
            $subKlasifikasiModel = new SubKlasifikasiModel();
            
            //insert data into database
            $subKlasifikasiModel->insert([
                'nama_sub_klasifikasi'   => $this->request->getPost('nama_sub_klasifikasi'),
                'kode_sub_klasifikasi' => $this->request->getPost('kode_sub_klasifikasi'),                
            ]);

            //flash message
            session()->setFlashdata('message', 'Sub Klasifikasi Berhasil Disimpan');

            return redirect()->to(base_url('sub_klasifikasi'));
        }
    }

    public function edit($id)
    {
        //model initialize
        $subKlasifikasiModel = new SubKlasifikasiModel();

        $data = array(
            'sub_klasifikasi' => $subKlasifikasiModel->find($id)
        );

        return view('sub_klasifikasi/sub_klasifikasi_edit', $data);
    }

    /**
     * update function
     */
    public function update($id)
    {           
        //define validation
        $validation = $this->validate([
            'nama_sub_klasifikasi' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Sub Klasifikasi.'
                ]
            ],
            'kode_sub_klasifikasi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kode Sub Klasifikasi.'
                ]
            ],            
        ]);

        if(!$validation) {

            //model initialize
            $subKlasifikasiModel = new SubKlasifikasiModel();

            //render view with error validation message
            return view('sub_klasifikasi/sub_klasifikasi_edit', [
                'sub_klasifikasi' => $subKlasifikasiModel->find($id),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $subKlasifikasiModel = new SubKlasifikasiModel();
            
            //insert data into database
            $subKlasifikasiModel->update($id, [
                'nama_sub_klasifikasi'   => $this->request->getPost('nama_sub_klasifikasi'),
                'kode_sub_klasifikasi' => $this->request->getPost('kode_sub_klasifikasi'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Sub Klasifikasi Berhasil Diupdate');

            return redirect()->to(base_url('sub_klasifikasi'));
        }
    }

    /**
     * delete function
     */
    public function delete($id)
    {
        //model initialize
        $subKlasifikasiModel = new SubKlasifikasiModel();

        $sub_klasifikasi = $subKlasifikasiModel->find($id);

        if($sub_klasifikasi) {
            $subKlasifikasiModel->delete($id);

            //flash message
            session()->setFlashdata('message', 'Sub Klasifikasi Berhasil Dihapus');

            return redirect()->to(base_url('sub_klasifikasi'));
        }
    }
}