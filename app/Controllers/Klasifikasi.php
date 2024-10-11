<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KlasifikasiModel;
use App\Models\SubKlasifikasiModel;
use App\Models\VKlasifikasiModel;

class Klasifikasi extends BaseController
{
    /**
     * index function
     */
    public function index()
    {
        //model initialize
        $klasifikasiModel = new VKlasifikasiModel();

        $data['klasifikasi'] = $klasifikasiModel->orderBy('id_klasifikasi', 'DESC')->findAll();
        return view('klasifikasi/klasifikasi_data', $data);
    }

    public function create()
    {
        //model initialize
        $subKlasifikasiModel = new SubKlasifikasiModel();

        $data = array(
            'sub_klasifikasi' => $subKlasifikasiModel->findAll()
        );

        return view('klasifikasi/klasifikasi_create', $data);
    }

    /**
     * store function
     */
    public function store()
    {           
        //define validation
        $validation = $this->validate([
            'id_sub_klasifikasi' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Sub Klasifikasi.'
                ]
            ],
            'nama_klasifikasi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Klasifikasi.'
                ]
            ],
            'kode_klasifikasi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kode Klasifikasi.'
                ]
            ],     
        ]);

        if(!$validation) {

            //model initialize
            $subKlasifikasiModel = new SubKlasifikasiModel();

            //render view with error validation message
            return view('klasifikasi/klasifikasi_create', [
                'sub_klasifikasi' => $subKlasifikasiModel->findAll(),
                'validation' => $this->validator
            ]);

        } else {

             //model initialize
            $KlasifikasiModel = new KlasifikasiModel();
            
            //insert data into database
            $KlasifikasiModel->insert([
                'id_sub_klasifikasi'   => $this->request->getPost('id_sub_klasifikasi'),
                'nama_klasifikasi'   => $this->request->getPost('nama_klasifikasi'),
                'kode_klasifikasi' => $this->request->getPost('kode_klasifikasi'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Klasifikasi Berhasil Disimpan');

            return redirect()->to(base_url('klasifikasi'));
        }
    }

    public function edit($id)
    {
        //model initialize
        $klasifikasiModel = new KlasifikasiModel();
        $subKlasifikasiModel = new SubKlasifikasiModel();

        $getKlasifikasi = $klasifikasiModel->find($id);

        $data = array(
            'id_sub_klasifikasi' => $subKlasifikasiModel->find($getKlasifikasi['id_sub_klasifikasi']),
            'sub_klasifikasi' => $subKlasifikasiModel->findAll(),
            'klasifikasi' => $getKlasifikasi
        );

        return view('klasifikasi/klasifikasi_edit', $data);
    }

    /**
     * update function
     */
    public function update($id)
    {           
        //define validation
        $validation = $this->validate([
            'id_sub_klasifikasi' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Sub Klasifikasi.'
                ]
            ],
            'nama_klasifikasi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Klasifikasi.'
                ]
            ],
            'kode_klasifikasi'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kode Klasifikasi.'
                ]
            ],     
        ]);

        if(!$validation) {

            //model initialize
            $klasifikasiModel = new KlasifikasiModel();

            //render view with error validation message
            return view('klasifikasi/klasifikasi_edit', [
                'klasifikasi' => $klasifikasiModel->find($id),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $klasifikasiModel = new KlasifikasiModel();
            
            //insert data into database
            $klasifikasiModel->update($id, [
                'id_sub_klasifikasi'   => $this->request->getPost('id_sub_klasifikasi'),
                'nama_klasifikasi'   => $this->request->getPost('nama_klasifikasi'),
                'kode_klasifikasi' => $this->request->getPost('kode_klasifikasi'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Klasifikasi Berhasil Diupdate');

            return redirect()->to(base_url('klasifikasi'));
        }
    }

    /**
     * delete function
     */
    public function delete($id)
    {
        //model initialize
        $klasifikasiModel = new KlasifikasiModel();

        $klasifikasi = $klasifikasiModel->find($id);

        if($klasifikasi) {
            $klasifikasiModel->delete($id);

            //flash message
            session()->setFlashdata('message', 'Klasifikasi Berhasil Dihapus');

            return redirect()->to(base_url('klasifikasi'));
        }
    }
}